<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');
define('GALLERY_DIR', ROOT . 'gallery_img/');
define('GALLERY_BIG', ROOT . 'gallery_img/big/');
define('GALLERY_SMALL', ROOT . 'gallery_img/small');



/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'root');
define('PASS', '');
define('DB', 'shop1');

//TODO попробуйте сделать эти пути абсолютными
include "../engine/db.php";
include "../engine/news.php";
include "../engine/function.php";
include "../engine/gallery.php";
include "../engine/catalog.php";
include "../engine/log.php";
include ROOT . 'classSimpleimage.php';