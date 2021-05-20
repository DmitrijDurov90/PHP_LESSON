<?php 

function renderTemplate( $page , $content = '' )
{
   ob_start();
   include "html/" . $page . ".php";
   return ob_get_clean();
}

$layout = renderTemplate('/layout');
$about = renderTemplate('about');
$menu = renderTemplate('menu');



echo renderTemplate( 'layout' , $layout );
echo renderTemplate( 'menu' , $menu );
echo renderTemplate( 'about' , $about );

?>