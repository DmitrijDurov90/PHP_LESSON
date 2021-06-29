<?php 

include 'bd.php';

define('IMG_GALLERY', 'gallery_img/');
define('IMG_BIG', 'big/');


// var_dump($result) ;
// die();

if ($result-> num_rows == 0) {
   
    echo "Таблица пустая . Заполнети данными об изображениях";

    $files10 = array_splice(scandir( IMG_GALLERY.IMG_BIG),2);

    mysqli_query($bd, "INSERT INTO imgCatalog( `img_name`) VALUES ('" . implode("'),('",$files10) . "')");
   

} else {
    echo 'ok' ;
}