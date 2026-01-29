<?php include __DIR__ . '/header.php'; ?>
<main style="max-width:900px;margin:auto;">
    <h1 style="text-align:center;">Gestion des appareils</h1>
    <section style="margin-bottom:30px;">
        <h2>Liste des appareils</h2>
        <table border="1" cellpadding="8" cellspacing="0" style="width:100%;background:#fff;">
            <thead style="background:#0078d7;color:#fff;">
                <tr>
                    <th>Modèle</th>
                    <th>Compagnie</th>
                    <th>Capacité</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Airbus A320</td>
                    <td>Air France</td>
                    <td>180</td>
                    <td>Moyen-courrier</td>
                    <td><button>Modifier</button> <button>Supprimer</button></td>
                </tr>
                <tr>
                    <td>Boeing 737</td>
                    <td>Transavia</td>
                    <td>189</td>
                    <td>Court-courrier</td>
                    <td><button>Modifier</button> <button>Supprimer</button></td>
                </tr>
            </tbody>
        </table>
    </section>
    <section style="margin-bottom:30px;">
        <h2>Ajouter un appareil</h2>
        <form style="display:flex;gap:15px;flex-wrap:wrap;align-items:center;">
            <input type="text" placeholder="Modèle" required>
            <input type="text" placeholder="Compagnie" required>
            <input type="number" placeholder="Capacité" min="1" required>
            <input type="text" placeholder="Type" required>
            <button type="submit">Ajouter</button>
        </form>
    </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>
