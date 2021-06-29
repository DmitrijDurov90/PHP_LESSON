<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'greg');
define('PASS', '12345');
define('DB', 'greg234');

//TODO попробуйте сделать эти пути абсолютными
include "../engine/db.php";
include "../engine/news.php";
include "../engine/function.php";
include "../engine/gallery.php";
include "../engine/catalog.php";
include "../engine/log.php";