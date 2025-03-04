<?php

require_once __DIR__ . '/BD/DBLoader.php';
require_once __DIR__ . '/AutoLoader.php';
require_once __DIR__. '/Controlleurs/Routeur.php';
require_once __DIR__. '/Controlleurs/config.php';

use BD\DBLoader;
use Controlleurs\Routeur;

AutoLoader::register();

$connection = DBLoader::getConnection();

$router = new Routeur();
$router->handleRequest();

?>