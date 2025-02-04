<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Mon super site</title>
        <link rel="stylesheet" href="/src/ressources/css/style_accueil.css">
    </head>
    <body>
        <?php
        require_once __DIR__ . '/header.php';
        ?>
        <main>
            <div class="search-bar">
                <input type="text" placeholder="Recherchez un restaurant...">
                <button type="submit"><img src="/src/ressources/img/loupe.png"></button>
            </div>
        </main>
    </body>
</html>