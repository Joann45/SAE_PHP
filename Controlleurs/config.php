<?php

define('BASE_PATH', __DIR__ . '/..');
define('SRC_PATH', BASE_PATH . '/src');
define('MODEL_PATH', SRC_PATH . '/Modèle');
define('VIEW_PATH', SRC_PATH . '/Views');

define('CURRENT_PAGE', basename($_SERVER['PHP_SELF'], '.php'));
?>