<?php 

function renderTemplate( $page , $gallery_img = '', $content = '' )
{
   ob_start();
   include $page . ".php";
   return ob_get_clean();
}

$layout = renderTemplate('html/layout');
$gallery_img = renderTemplate('engine/gallery_img');



 echo renderTemplate( 'html/layout' ,$gallery_img, $layout );



?>