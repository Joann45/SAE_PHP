<?php

define('BASE_PATH', __DIR__ . '/..');
define('SRC_PATH', BASE_PATH . '/src');
define('BD_PATH', BASE_PATH . '/BD');
define('CONTROLLEURS_PATH', BASE_PATH . '/Controlleurs');
define('VIEWS_PATH', SRC_PATH . '/Views');
define('MODELS_PATH', SRC_PATH . '/Modèle');
define('RESSOURCES_PATH', SRC_PATH . '/ressources');
define('STYLE_PATH', RESSOURCES_PATH . '/css');

define('CURRENT_PAGE', basename($_SERVER['PHP_SELF'], '.php'));
?>