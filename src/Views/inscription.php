<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="/src/ressources/css/style_inscription.css">
    </head>
    <body>
        <?php 
        require_once __DIR__ . "/header.php";
        ?>
        <main>
            <h1>Inscription</h1>
            <form action="controlleur_inscription" method="post">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" required>
                <label for="telephone">Téléphone</label>
                <input type="tel" name="telephone" id="telephone" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>Connexion
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
                <label for="password_confirm">Confirmer le mot de passe</label>
                <input type="password" name="password_confirm" id="password_confirm" required>
                <button type="submit">S'inscrire</button>
            </form>
            <p>Déjà inscrit ? : <a href="/connexion"><input type="button" value="Se connecter"></input></a></p>
        </main>
    </body>
</html>