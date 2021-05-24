<?php 

function renderTemplate( $page , $content = '', $menu = '', $about = ''  )
{
   ob_start();
   include 'html/' . $page . ".php";
   return ob_get_clean();
}

$layout = renderTemplate('layout');
$menu = renderTemplate('menu');
$about = renderTemplate('about');



echo renderTemplate( 'layout' , $layout , $menu , $about  );


?>