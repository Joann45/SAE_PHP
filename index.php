<?php

require_once __DIR__ . '/BD/SupabaseLoader.php';
require_once __DIR__ . '/AutoLoader.php';

use BD\SupabaseLoader;

AutoLoader::register();

$connection = SupabaseLoader::getConnection();

SupabaseLoader::query($connection, "INSERT INTO utilisateur VALUES (1, 'test', 'test', 'test', 'test', 'test')");

?>