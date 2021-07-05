<?php


function prepareVariables($page)
{
    switch ($page) {

        case 'index':

            $params['layout'] = 'main';
            
            break;
    
        case 'catalog':
            $params['layout'] = 'catalog';
            $params['catalog'] = getCatalog();
            break;

        case 'image':
            $params['layout'] = 'gallery';
            addLikes90($_GET['id']);
            $params['image'] = getOneImage($_GET['id']);
            

            break;   
    
        case 'gallery':
           // if ($_POST[$_FILES]) {
                //upload();
               /// header();
          //  }
           // $params['message'] = $mes[$_GET['message']];
    
            $params['layout'] = 'gallery';
            $params['files'] = getGallery();
            // $params['upload'] 
           
            break;
    
        case 'news':
            $params['news'] = getNews();
            break;
    
        case 'newsone':
            
            break;
    
        case 'apicatalog':
            echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
            die();
    
    }
    return $params;
}

function render($page, $params )
{
    return renderTemplate(LAYOUTS_DIR . $params['layout'], [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}

function renderTemplate($page, $params )
{

    //$params = ['menu' => 'код меню', 'catalog' => ['чай'], 'content' => 'Код подшаблона']
    extract($params);
    /* foreach ($params as $key => $value) {
         $$key = $value;
     }
     */
    ob_start();
    $fileName = TEMPLATES_DIR . $page . ".php";
    if (file_exists($fileName)) {
        include $fileName;
    }

    return ob_get_clean();
}
