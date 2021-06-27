<?php



function render($page, $params = [], $layout = 'layout' )
{    
    
    
    return renderTemplate( LAYOUTS_DIR . $layout, [


        'content' => renderTemplate( TEMPLATES_DIR . $page, $params),
        'menu' => renderTemplate(TEMPLATES_DIR . 'menu')
        
    ]);
}

function renderTemplate($page, $params = [])
{
    ob_start();

    if (!is_null($params))   
        extract($params);
    
    
    $fileName = $page . ".php";
    
    // var_dump($fileName);
    // die();

    if (file_exists($fileName)) {
    
        include $fileName;
    }

    return ob_get_clean();
}
