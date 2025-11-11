<?php

// Serve static assets directly if they exist
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$parsedUrl = parse_url($requestUri);
$path = $parsedUrl['path'] ?? '/';

// Remove query string for file checking
$filePath = ltrim($path, '/');

// Check if it's a static asset request
if (preg_match('/\.(css|js|png|jpg|jpeg|gif|svg|webp|ico|pdf|txt|woff|woff2|ttf|eot|map)$/i', $filePath)) {
    $publicPath = __DIR__ . '/../public/' . $filePath;

    if (file_exists($publicPath) && is_file($publicPath)) {
        // Set appropriate content type
        $mimeTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
            'ico' => 'image/x-icon',
            'pdf' => 'application/pdf',
            'txt' => 'text/plain',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject',
            'map' => 'application/json'
        ];

        $ext = strtolower(pathinfo($publicPath, PATHINFO_EXTENSION));
        $contentType = $mimeTypes[$ext] ?? 'application/octet-stream';

        header('Content-Type: ' . $contentType);
        header('Cache-Control: public, max-age=31536000, immutable');
        readfile($publicPath);
        exit;
    }
}

// Otherwise, pass to Laravel
require __DIR__ . "/../public/index.php";
