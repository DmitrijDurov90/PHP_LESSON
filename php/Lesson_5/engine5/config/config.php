<?php


define('TEMPLATES_DIR', ROOT .'templates/');
define('LAYOUTS_DIR', ROOT . 'templates/layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'root');
define('PASS', '');
define('DB', 'shop1');

//TODO попробуйте сделать эти пути абсолютными
include "../engine/bd.php";
include "../engine/news.php";
include "../engine/function.php";
include "../engine/gallery.php";
include "../engine/catalog.php";
include "../engine/log.php";

