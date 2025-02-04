<?php
// Si le fichier demandé existe, PHP le sert directement
if (file_exists(__DIR__ . $_SERVER["REQUEST_URI"])) {
    return false;
}

// Sinon, on redirige toutes les requêtes vers index.php
require_once __DIR__ . '/index.php';
?>