<?php


define('ROOT', dirname(__DIR__).'/');
include ROOT . "config/config.php";

$url_array = explode('/', $_SERVER['REQUEST_URI']);

if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}
$params = [
    'name' => 'Админ'
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

        $params['gallery_img'] = getGallery();

        
        break;

    case 'image':
        
        
        $id = (int)$_GET['id'];
        $params['img_name'] = getOneNews($id);
        

        break;


    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();

}

_log($params, 'params');



echo render($page, $params, $layout);

