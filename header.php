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

<header style="background:#111;padding:15px 0;margin-bottom:30px;">
    <nav style="display:flex;justify-content:center;gap:30px;">
        <a href="/index.php" style="color:#fff;font-weight:bold;text-decoration:none;border-radius:0;padding:8px 12px;">Accueil</a>
        <a href="/pilote.php" style="color:#fff;font-weight:bold;text-decoration:none;border-radius:0;padding:8px 12px;">Gestion des pilotes</a>
        <a href="/vol.php" style="color:#fff;font-weight:bold;text-decoration:none;border-radius:0;padding:8px 12px;">Gestion des vols</a>
        <a href="/appareil.php" style="color:#fff;font-weight:bold;text-decoration:none;border-radius:0;padding:8px 12px;">Gestion des appareils</a>
        <a href="/planning.php" style="color:#fff;font-weight:bold;text-decoration:none;border-radius:0;padding:8px 12px;">Gestion du planning</a>
    </nav>
    <style>
        /* Bannière illustration accueil */
        .banner-illustration {
            /* Pas d’animation ni de transition sur les bannières */
        }
        /* Animation éditoriale galerie photo (fade-in, zoom, slide) */
        .photo-zoom {
            opacity:0;
            transform:scale(0.96) translateY(30px);
            filter:blur(2px);
            pointer-events:none;
        }
        .photo-zoom.animated {
            opacity:1;
            transform:scale(1) translateY(0);
            filter:blur(0);
            pointer-events:auto;
            transition:
                opacity 0.9s cubic-bezier(.4,0,.2,1),
                transform 0.9s cubic-bezier(.4,0,.2,1),
                filter 0.7s cubic-bezier(.4,0,.2,1);
        }
        body {
            font-family:'Segoe UI',Arial,sans-serif;
            background:#fff;
            color:#111;
            margin:0;
            min-height:100vh;
            display:flex;
            flex-direction:column;
        }
        html, body { overscroll-behavior: none; }
        header, footer {
            flex-shrink:0;
        }
        main {
            flex:1 0 auto;
            max-width:1000px;
            margin:auto;
            padding:30px 0 0 0;
        }
        table {
            border-collapse:collapse;
            width:100%;
            background:#fff;
            box-shadow:0 4px 24px rgba(0,0,0,0.07);
            margin-bottom:30px;
            transition:box-shadow .5s cubic-bezier(.4,0,.2,1), transform .5s cubic-bezier(.4,0,.2,1);
        }
        th, td {
            border:1px solid #222;
            padding:14px 12px;
            text-align:left;
            transition:background .4s cubic-bezier(.4,0,.2,1), color .4s cubic-bezier(.4,0,.2,1), box-shadow .4s cubic-bezier(.4,0,.2,1);
        }
        th {
            background:#111;
            color:#fff;
            letter-spacing:1px;
            font-size:1.05em;
        }
        tr {
            transition:background .4s cubic-bezier(.4,0,.2,1), box-shadow .4s cubic-bezier(.4,0,.2,1), transform .4s cubic-bezier(.4,0,.2,1);
        }
        tr:hover td {
            background:#f3f3f3;
            box-shadow:0 2px 12px rgba(0,0,0,0.10);
            transform:scale(1.01);
        }
        button, .btn {
            background:#111;
            color:#fff;
            border:none;
            border-radius:0;
            padding:12px 26px;
            font-weight:bold;
            cursor:pointer;
            transition:background .4s cubic-bezier(.4,0,.2,1), color .4s cubic-bezier(.4,0,.2,1), box-shadow .4s cubic-bezier(.4,0,.2,1), transform .4s cubic-bezier(.4,0,.2,1);
            letter-spacing:1px;
            box-shadow:0 2px 8px rgba(0,0,0,0.04);
        }
        button:hover, .btn:hover {
            background:#fff;
            color:#111;
            border:1px solid #111;
            box-shadow:0 8px 32px rgba(0,0,0,0.18);
            transform:translateY(-2px) scale(1.04);
        }
        input, select {
            border:1px solid #222;
            border-radius:0;
            padding:10px;
            background:#fff;
            color:#111;
            transition:border .4s cubic-bezier(.4,0,.2,1), box-shadow .4s cubic-bezier(.4,0,.2,1), transform .4s cubic-bezier(.4,0,.2,1);
        }
        input:focus, select:focus {
            border:1.5px solid #111;
            outline:none;
            box-shadow:0 2px 12px rgba(0,0,0,0.13);
            transform:scale(1.03);
        }
        h1, h2, h3 {
            font-weight:600;
            letter-spacing:1px;
            margin-top:0;
        }
        section {
            background:#fff;
            border-radius:0;
            box-shadow:0 2px 8px rgba(0,0,0,0.04);
            padding:24px 20px;
            margin-bottom:30px;
            transition:box-shadow .5s cubic-bezier(.4,0,.2,1), transform .5s cubic-bezier(.4,0,.2,1);
        }
        section:hover {
            box-shadow:0 8px 32px rgba(0,0,0,0.10);
            transform:scale(1.01);
        }
        nav a {
            transition:color .4s cubic-bezier(.4,0,.2,1), background .4s cubic-bezier(.4,0,.2,1), box-shadow .4s cubic-bezier(.4,0,.2,1), transform .4s cubic-bezier(.4,0,.2,1);
            border-radius:0;
            padding:8px 12px;
            margin:0 2px;
        }
        nav a:hover {
            background:#fff;
            color:#111;
            box-shadow:0 2px 8px rgba(0,0,0,0.08);
            transform:scale(1.08);
        }
        @media (max-width:700px) {
            main {padding:10px 0 0 0;}
            section {padding:12px 5px;}
            th, td {padding:8px 4px;}
            button, .btn {padding:8px 10px;}
        }
    </style>
</header>
