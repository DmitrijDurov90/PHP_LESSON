<?php

define('ROOT', dirname(__DIR__).'/');
include ROOT . "config/config.php";









if (isset($_GET['page'])) {
    $page = $_GET['page'];
    
} else {

    $page = 'index';
}

$params = [
    'name' => 'Dmitrij ))'
];

$layout = 'layout';

switch ($page) {

    case 'index':
        break;


    case 'catalog':
        $params['catalog'] = getCatalog();
        break;

    case 'gallery':

        $layout = 'gallery' ;
      
    //    if ($_POST[$_FILES]) {
    //         upload();
    //        / header();
    //    }
    //    $params['message'] = $mes[$_GET['message']];

        $params['gallery_img'] = getGallery();

       

        break;


    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();

}

_log($params, 'params');


echo render($page, $params, $layout);

