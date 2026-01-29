<?php
// Script pour télécharger automatiquement les images Unsplash nécessaires au site
$images = [
    [
        'url' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80',
        'file' => 'banner1.jpg'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1464037866556-46273834b3fb?auto=format&fit=crop&w=800&q=80',
        'file' => 'banner2.jpg'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80',
        'file' => 'photo1.jpg'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=800&q=80',
        'file' => 'photo2.jpg'
    ],
];
$dir = __DIR__ . '/images/';
if (!is_dir($dir)) mkdir($dir, 0777, true);
foreach ($images as $img) {
    $dest = $dir . $img['file'];
    $data = @file_get_contents($img['url']);
    if ($data !== false) {
        file_put_contents($dest, $data);
        echo "Image téléchargée : {$img['file']}<br>\n";
    } else {
        echo "Erreur téléchargement : {$img['file']}<br>\n";
    }
}
echo "<b>Terminé.</b>";
