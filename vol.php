<?php include __DIR__ . '/header.php'; ?>
<main style="max-width:900px;margin:auto;">
    <h1 style="text-align:center;">Gestion des vols</h1>
    <section style="margin-bottom:30px;">
        <h2>Liste des vols</h2>
        <table style="width:100%;background:#fff;">
            <thead style="background:#0078d7;color:#fff;">
                <tr>
                    <th>Numéro de vol</th>
                    <th>Destination</th>
                    <th>Départ</th>
                    <th>Arrivée</th>
                    <th>Compagnie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>AF1234</td>
                    <td>Paris (CDG)</td>
                    <td>08:00</td>
                    <td>10:00</td>
                    <td>Air France</td>
                    <td><button>Modifier</button> <button>Supprimer</button></td>
                </tr>
                <tr>
                    <td>TO5678</td>
                    <td>Nice</td>
                    <td>09:30</td>
                    <td>11:15</td>
                    <td>Transavia</td>
                    <td><button>Modifier</button> <button>Supprimer</button></td>
                </tr>
            </tbody>
        </table>
    </section>
    <section style="margin-bottom:30px;">
        <h2>Ajouter un vol</h2>
        <form style="display:flex;gap:15px;flex-wrap:wrap;align-items:center;">
            <input type="text" placeholder="Numéro de vol" required>
            <input type="text" placeholder="Destination" required>
            <input type="time" placeholder="Départ" required>
            <input type="time" placeholder="Arrivée" required>
            <input type="text" placeholder="Compagnie" required>
            <button type="submit">Ajouter</button>
        </form>
    </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>
