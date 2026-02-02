$<?php
// page d'affichage minimaliste d'une image en grand
$img = isset($_GET['img']) ? basename($_GET['img']) : '';
$allowed = [
    'photo-1545488286-6fe608f23485.avif',
    'photo-1542296332-2e4473faf563.avif',
    'photo-1558204692-5f402fe220b9.avif',
    'photo-1466691623998-d607fab1ca29.avif',
    'photo-1551403793-813bd2ab3fe8.avif',
    'photo-1583150647472-d239652a12f5.avif',
];
if (!in_array($img, $allowed)) {
    http_response_code(404);
    echo 'Image non trouvée.';
    exit;
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Photo</title>
    <style>
        html, body {
            height:100%;
            margin:0;
            padding:0;
            background:#fff;
            font-family:'Inter', 'Segoe UI', Arial, sans-serif;
            color:#111;
        }
        body {
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            min-height:100vh;
        }
        .photo-container {
            background:#fff;
            border-radius:0;
            box-shadow:none;
            border:1.5px solid #111;
            padding:0;
            display:flex;
            flex-direction:column;
            align-items:center;
            max-width:100vw;
            max-height:100vh;
        }
        img {
            max-width:92vw;
            max-height:82vh;
            border-radius:0;
            background:#fff;
            box-shadow:none;
            border-bottom:1.5px solid #111;
            border-top:1.5px solid #111;
            border-left:none;
            border-right:none;
            margin-bottom:0;
            margin-top:0;
            display:block;
        }
        a.retour {
            color:#111;
            text-decoration:none;
            font-weight:400;
            font-size:1rem;
            margin:24px 0 12px 0;
            padding:6px 18px;
            border-radius:99px;
            background:transparent;
            border:1px solid #e0e0e0;
            transition:background .18s, border .18s;
            letter-spacing:0.01em;
        }
        a.retour:hover {
            background:#f5f5f5;
            border:1px solid #bbb;
        }
        @media (max-width:700px) {
            .photo-container { border-width:1px; }
            img { max-width:99vw; max-height:54vh; }
            a.retour { margin:16px 0 8px 0; font-size:0.98rem; }
        }
    </style>
</head>
<body>
    <div class="photo-container">
        <img src="/assets/images/<?= htmlspecialchars($img) ?>" alt="Photo aéroport">
        <a href="#" onclick="if(document.referrer && document.referrer.indexOf('accueil.php')!==-1){history.back();}else{window.location.href='/accueil.php';} return false;" class="retour">&#8592; Retour à la galerie</a>
    </div>
</body>
</html>
