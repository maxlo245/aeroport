<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Aéroport International</title>
    <style>
    /* Galerie photo minimaliste */
    .photo-gallery {
        background:#fff;
        padding:32px 0 24px 0;
        border-radius:0;
        box-shadow:none;
        display:flex;
        justify-content:center;
        gap:30px;
        flex-wrap:wrap;
    }
    .photo-gallery a {
        display:inline-block;
        border-radius:8px;
        overflow:hidden;
        background:#fff;
        box-shadow:none;
        transition:box-shadow .2s, transform .2s;
    }
    .photo-gallery a:hover, .photo-gallery a:focus {
        box-shadow:0 2px 16px rgba(0,0,0,0.10);
        transform:scale(1.03);
    }
    .photo-gallery img {
        display:block;
        width:220px;
        height:150px;
        object-fit:cover;
        border-radius:8px;
        background:#f5f5f5;
        box-shadow:none;
        border:none;
        transition:filter .2s;
    }
    .photo-gallery a:hover img, .photo-gallery a:focus img {
        filter:brightness(1.08) contrast(1.08);
    }
    </style>
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
<main style="max-width:1200px;margin:auto;">
    <h1 style="text-align:center;font-size:2.5rem;margin-bottom:40px;letter-spacing:1px;">Aéroport International</h1>
    <div style="max-width:900px;margin:auto;">
        <section style="margin-bottom:30px;">
            <h2 style="font-size:1.5rem;">Présentation</h2>
            <p>Bienvenue sur le portail de gestion de l'aéroport. Retrouvez toutes les informations sur les vols, les appareils, les pilotes et le planning d'affectation. Ce site vous permet de gérer efficacement toutes les opérations aéroportuaires.</p>
        </section>
        <section style="display:flex;justify-content:space-around;flex-wrap:wrap;gap:20px;">
            <div style="flex:1;min-width:200px;background:#f5f5f5;padding:20px;border-radius:8px;text-align:center;">
                <h3>Pilotes</h3>
                <div style="flex:1;min-width:200px;background:#fff;padding:20px;border-radius:0;text-align:center;border:1px solid #222;">
                    <p>Consultez, ajoutez ou modifiez les informations des pilotes.</p>
                    <a href="/pilote.php" class="btn">Gérer les pilotes</a>
                </div>
            </div>
            <div style="flex:1;min-width:200px;background:#f5f5f5;padding:20px;border-radius:8px;text-align:center;">
                <h3>Vols</h3>
                <p>Planifiez et gérez les vols de l'aéroport.</p>
                <a href="/vol.php" class="btn">Gérer les vols</a>
            </div>
            <div style="flex:1;min-width:200px;background:#f5f5f5;padding:20px;border-radius:8px;text-align:center;">
                <h3>Appareils</h3>
                <p>Ajoutez ou consultez la flotte d'appareils disponibles.</p>
                <a href="/appareil.php" class="btn">Gérer les appareils</a>
            </div>
            <div style="flex:1;min-width:200px;background:#f5f5f5;padding:20px;border-radius:8px;text-align:center;">
                <h3>Planning d'affectation</h3>
                <p>Attribuez les pilotes et appareils aux vols selon le planning.</p>
                <a href="/planning.php" class="btn">Gérer le planning</a>
            </div>
        </section>
    </div>
    <!-- Transition déchirure papier -->
    <div style="width:100%;overflow:hidden;line-height:0;margin-top:60px;">
        <svg viewBox="0 0 1200 80" width="100%" height="80" preserveAspectRatio="none" style="display:block;">
            <path d="M0,40 Q100,80 200,40 T400,40 T600,60 T800,30 T1000,60 T1200,40 V80 H0Z" fill="#fff" stroke="#111" stroke-width="2"/>
        </svg>
    </div>
    <section id="photos" style="text-align:center;background:#fff;padding-top:0;">
        <h2>Galerie photo</h2>
        <p>Découvrez l'aéroport en images (à compléter avec de vraies photos).</p>
        <div class="photo-gallery">
            <a href="/photo.php?img=photo-1545488286-6fe608f23485.avif" rel="noopener">
                <img class="photo-zoom" src="/assets/images/photo-1545488286-6fe608f23485.avif" alt="Photo 1">
            </a>
            <a href="/photo.php?img=photo-1542296332-2e4473faf563.avif" rel="noopener">
                <img class="photo-zoom" src="/assets/images/photo-1542296332-2e4473faf563.avif" alt="Photo 2">
            </a>
            <a href="/photo.php?img=photo-1558204692-5f402fe220b9.avif" rel="noopener">
                <img class="photo-zoom" src="/assets/images/photo-1558204692-5f402fe220b9.avif" alt="Photo 3">
            </a>
            <a href="/photo.php?img=photo-1466691623998-d607fab1ca29.avif" rel="noopener">
                <img class="photo-zoom" src="/assets/images/photo-1466691623998-d607fab1ca29.avif" alt="Photo 4">
            </a>
            <a href="/photo.php?img=photo-1551403793-813bd2ab3fe8.avif" rel="noopener">
                <img class="photo-zoom" src="/assets/images/photo-1551403793-813bd2ab3fe8.avif" alt="Photo 5">
            </a>
            <a href="/photo.php?img=photo-1583150647472-d239652a12f5.avif" rel="noopener">
                <img class="photo-zoom" src="/assets/images/photo-1583150647472-d239652a12f5.avif" alt="Photo 6">
            </a>
        </div>
    </section>
    <script>
    // Animation éditoriale : apparition en cascade au scroll (accessibilité incluse)
    function animatePhotosOnView() {
        const photos = document.querySelectorAll('.photo-zoom');
        photos.forEach((img, i) => {
            if (img.classList.contains('animated')) return;
            const rect = img.getBoundingClientRect();
            if (rect.top < window.innerHeight - 60) {
                setTimeout(() => {
                    img.classList.add('animated');
                    img.setAttribute('aria-hidden', 'false');
                }, i * 120);
            }
        });
    }
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.photo-zoom').forEach(img => {
            img.setAttribute('aria-hidden', 'true');
        });
        animatePhotosOnView();
        window.addEventListener('scroll', animatePhotosOnView, { passive: true });

    });
    </script>
</main>
<!-- Style inclus dans le head -->
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
