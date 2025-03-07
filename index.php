<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test API Restaurant</title>
</head>
<body>
    <? include 'phpinfo.php'; ?>
    <? include 'class/db/SupabaseLoader.php'; ?>
    <h1>Test API Restaurant</h1>
    <!-- ...existing code... -->
    <section>
        <h2>GET All</h2>
        <button onclick="fetchAll()">Obtenir tous les restaurants</button>
        <pre id="getAllResult"></pre>
    </section>
    <section>
        <h2>GET By ID</h2>
        <input type="number" id="getId" placeholder="ID">
        <button onclick="fetchById()">Obtenir le restaurant</button>
        <pre id="getResult"></pre>
    </section>
    <section>
        <h2>POST Restaurant</h2>
        <input type="text" id="postName" placeholder="Nom">
        <input type="text" id="postAddress" placeholder="Adresse">
        <button onclick="createRestaurant()">Créer</button>
        <pre id="postResult"></pre>
    </section>
    <section>
        <h2>PUT Restaurant</h2>
        <input type="number" id="putId" placeholder="ID">
        <input type="text" id="putName" placeholder="Nom">
        <input type="text" id="putAddress" placeholder="Adresse">
        <button onclick="updateRestaurant()">Mettre à jour</button>
        <pre id="putResult"></pre>
    </section>
    <section>
        <h2>DELETE Restaurant</h2>
        <input type="number" id="deleteId" placeholder="ID">
        <button onclick="deleteRestaurant()">Supprimer</button>
        <pre id="deleteResult"></pre>
    </section>
    <script>
        const apiUrl = './api/restaurant.php';

        function fetchAll() {
            fetch(apiUrl)
                .then(res => res.json())
                .then(data => document.getElementById('getAllResult').textContent = JSON.stringify(data, null, 2));
        }

        function fetchById() {
            const id = document.getElementById('getId').value;
            fetch(apiUrl + '?id=' + id)
                .then(res => res.json())
                .then(data => document.getElementById('getResult').textContent = JSON.stringify(data, null, 2));
        }

        function createRestaurant() {
            const name = document.getElementById('postName').value;
            const address = document.getElementById('postAddress').value;
            fetch(apiUrl, {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({ name, address })
            })
            .then(res => res.json())
            .then(data => document.getElementById('postResult').textContent = JSON.stringify(data, null, 2));
        }

        function updateRestaurant() {
            const id = document.getElementById('putId').value;
            const name = document.getElementById('putName').value;
            const address = document.getElementById('putAddress').value;
            fetch(apiUrl + '?id=' + id, {
                method: 'PUT',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({ name, address })
            })
            .then(res => res.json())
            .then(data => document.getElementById('putResult').textContent = JSON.stringify(data, null, 2));
        }

        function deleteRestaurant() {
            const id = document.getElementById('deleteId').value;
            fetch(apiUrl + '?id=' + id, { method: 'DELETE' })
            .then(res => res.json())
            .then(data => document.getElementById('deleteResult').textContent = JSON.stringify(data, null, 2));
        }
    </script>
    <!-- ...existing code... -->
</body>
</html>
