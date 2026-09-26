<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'nullable|email|max:255',
            'company' => 'nullable|string|max:255',
            'project_type' => 'nullable|string|max:255',
            'budget_tier' => 'nullable|string|max:255',
            'timeline' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:3000',
        ]);

        $lead = Lead::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'company' => $validated['company'] ?? null,
            'project_type' => $validated['project_type'] ?? 'Non spécifié',
            'budget_tier' => $validated['budget_tier'] ?? 'Non spécifié',
            'timeline' => $validated['timeline'] ?? 'Dès que possible',
            'message' => $validated['message'] ?? 'Demande de projet reçue via le site officiel',
            'status' => 'new',
            'ip_address' => $request->ip(),
        ]);

        // Envoi de la notification par email à contact@smartfilmsprod.com
        try {
            $toEmail = 'contact@smartfilmsprod.com';
            $companyName = !empty($validated['company']) ? ' (' . $validated['company'] . ')' : '';
            $subject = '🎬 Nouvelle demande de projet : ' . $validated['name'] . $companyName;
            
            $content = "Bonjour l'équipe SmartFilms,\n\n"
                     . "Une nouvelle demande de projet vient d'être enregistrée sur le site officiel :\n\n"
                     . "--------------------------------------------------\n"
                     . "• Nom & Prénom : " . $validated['name'] . "\n"
                     . "• Organisme / Société : " . (!empty($validated['company']) ? $validated['company'] : 'Non renseigné') . "\n"
                     . "• Email : " . (!empty($validated['email']) ? $validated['email'] : 'Non renseigné') . "\n"
                     . "• Téléphone : " . $validated['phone'] . "\n"
                     . "• Type de projet : " . (!empty($validated['project_type']) ? $validated['project_type'] : 'Non spécifié') . "\n"
                     . "• Budget estimé : " . (!empty($validated['budget_tier']) ? $validated['budget_tier'] : 'Non spécifié') . "\n"
                     . "--------------------------------------------------\n\n"
                     . "Détails / Message :\n"
                     . (!empty($validated['message']) ? $validated['message'] : 'Aucun message particulier.') . "\n\n"
                     . "Date : " . now()->format('d/m/Y à H:i') . "\n"
                     . "Adresse IP : " . $request->ip() . "\n";

            \Illuminate\Support\Facades\Mail::raw($content, function ($m) use ($toEmail, $subject, $validated) {
                $m->to($toEmail)
                  ->subject($subject);
                if (!empty($validated['email'])) {
                    $m->replyTo($validated['email'], $validated['name']);
                }
            });
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::warning('Notification email lead error: ' . $e->getMessage());
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Votre demande de projet a bien été envoyée à notre équipe (contact@smartfilmsprod.com). Nous vous contacterons sous 24h ouvrées.',
                'lead_id' => $lead->id,
            ]);
        }

        return back()->with('success', 'Merci ! Votre demande a bien été envoyée à contact@smartfilmsprod.com. Nous reviendrons vers vous sous 24h.');
    }
}
