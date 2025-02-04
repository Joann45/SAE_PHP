<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="stylesheet" href="/src/ressources/css/style_connexion.css">
    </head>
    <body>
        <?php 
        require_once __DIR__ . "/header.php";
        ?>
        <main>
            <h1>Connexion</h1>
            <form action="/controlleur_connexion" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
                <button type="submit">Se connecter</button>
            </form>
            <p>Pas encore inscrit ? : <a href="/inscription">S'inscrire</a></p>
        </main>
    </body>
</html>