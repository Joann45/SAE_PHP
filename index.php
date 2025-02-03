<?php

require_once __DIR__ . '/Controlleurs/Routeur.php';
require_once __DIR__ . '/Controlleurs/config.php';
require_once __DIR__ . '/BD/SupabaseLoader.php';
require_once __DIR__ . '/AutoLoader.php';

use BD\SupabaseLoader;
use Controlleurs\Routeur;

AutoLoader::register();

$connection = SupabaseLoader::getConnection();

//SupabaseLoader::query($connection, "INSERT INTO utilisateur VALUES (1, 'test', 'test', 'test', 'test', 'test')");

$routeur = new Routeur();
$routeur->handleRequest();

?>