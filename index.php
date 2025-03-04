<?php

require_once __DIR__ . '/BD/DBLoader.php';
require_once __DIR__ . '/AutoLoader.php';

use BD\DBLoader;

AutoLoader::register();

$connection = DBLoader::getConnection();

?>