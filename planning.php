<?php include __DIR__ . '/header.php'; ?>
<main style="max-width:900px;margin:auto;">
    <h1 style="text-align:center;">Gestion du planning d'affectation</h1>
    <section style="margin-bottom:30px;">
        <h2>Planning des affectations</h2>
        <table style="width:100%;background:#fff;">
            <thead style="background:#0078d7;color:#fff;">
                <tr>
                    <th>Pilote</th>
                    <th>Vol</th>
                    <th>Appareil</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jean Dupont</td>
                    <td>AF1234</td>
                    <td>Airbus A320</td>
                    <td>22/01/2026</td>
                    <td>08:00</td>
                    <td><button>Modifier</button> <button>Supprimer</button></td>
                </tr>
                <tr>
                    <td>Luc Martin</td>
                    <td>TO5678</td>
                    <td>Boeing 737</td>
                    <td>22/01/2026</td>
                    <td>09:30</td>
                    <td><button>Modifier</button> <button>Supprimer</button></td>
                </tr>
            </tbody>
        </table>
    </section>
    <section style="margin-bottom:30px;">
        <h2>Affecter un pilote à un vol</h2>
        <form style="display:flex;gap:15px;flex-wrap:wrap;align-items:center;">
            <input type="text" placeholder="Pilote" required>
            <input type="text" placeholder="Vol" required>
            <input type="text" placeholder="Appareil" required>
            <input type="date" required>
            <input type="time" required>
            <button type="submit">Affecter</button>
        </form>
    </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>
