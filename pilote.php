<?php include __DIR__ . '/header.php'; ?>
<main style="max-width:900px;margin:auto;">
    <h1 style="text-align:center;">Gestion des pilotes</h1>
    <section style="margin-bottom:30px;">
        <h2>Liste des pilotes</h2>
        <table style="width:100%;background:#fff;">
            <thead style="background:#0078d7;color:#fff;">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Expérience (années)</th>
                    <th>Appareil</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dupont</td>
                    <td>Jean</td>
                    <td>12</td>
                    <td>Airbus A320</td>
                    <td><button>Modifier</button> <button>Supprimer</button></td>
                </tr>
                <tr>
                    <td>Martin</td>
                    <td>Luc</td>
                    <td>8</td>
                    <td>Boeing 737</td>
                    <td><button>Modifier</button> <button>Supprimer</button></td>
                </tr>
            </tbody>
        </table>
    </section>
    <section style="margin-bottom:30px;">
        <h2>Ajouter un pilote</h2>
        <form style="display:flex;gap:15px;flex-wrap:wrap;align-items:center;">
            <input type="text" placeholder="Nom" required>
            <input type="text" placeholder="Prénom" required>
            <input type="number" placeholder="Expérience" min="0" required>
            <input type="text" placeholder="Appareil" required>
            <button type="submit">Ajouter</button>
        </form>
    </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>
