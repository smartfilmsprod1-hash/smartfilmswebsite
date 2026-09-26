<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('images:webp', function () {
    ini_set('memory_limit', '512M');
    $dir = public_path('uploads');
    if (!is_dir($dir)) {
        $this->error("Directory not found: $dir");
        return;
    }

    $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir));
    $count = 0;
    $totalSavedBytes = 0;

    foreach ($files as $file) {
        if ($file->isDir()) continue;
        
        $ext = strtolower($file->getExtension());
        if (!in_array($ext, ['jpg', 'jpeg', 'png'])) continue;

        $path = $file->getRealPath();
        $webpPath = preg_replace('/\.(jpe?g|png)$/i', '.webp', $path);

        if (!file_exists($webpPath) || filemtime($path) > filemtime($webpPath)) {
            $content = @file_get_contents($path);
            $img = $content ? @imagecreatefromstring($content) : null;
            if ($img) {
                imagepalettetotruecolor($img);
                imagealphablending($img, true);
                imagesavealpha($img, true);
                imagewebp($img, $webpPath, 85);
                imagedestroy($img);
                $originalSize = filesize($path);
                $webpSize = filesize($webpPath);
                $saved = $originalSize - $webpSize;
                $totalSavedBytes += max(0, $saved);
                $this->info("Converted: " . basename($path) . " -> " . basename($webpPath) . " (" . round($originalSize/1024, 1) . "KB -> " . round($webpSize/1024, 1) . "KB)");
                $count++;
            }
        }
    }

    $this->info("Done! Converted $count image(s). Saved " . round($totalSavedBytes / 1024, 1) . " KB.");
})->purpose('Convert all uploaded JPG and PNG images to modern WebP format');

