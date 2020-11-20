<?php

ob_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}


require_once 'src/Connection.php';

require_once 'src/QueryBuilder.php';

require_once 'src/Task.php';

include_once 'resources/index.views.php';;
