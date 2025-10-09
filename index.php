<?php
session_start();

// caminhos
define('BASE_PATH', __DIR__ . '/');
define('BASE_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/');
define('ASSETS_URL', BASE_URL . 'assets/');
define('PAGES_PATH', BASE_PATH . 'pages/');
define('INCLUDES_PATH', BASE_PATH . 'includes/');
define('CONFIG_PATH', BASE_PATH . 'config/');

// dependências
require_once CONFIG_PATH . 'db.php';
require_once INCLUDES_PATH . 'Router.php';
require_once INCLUDES_PATH . 'functions.php';

// roteador
$router = new Router();

require_once CONFIG_PATH . 'routes/web.php';

$router->dispatch();

?>
