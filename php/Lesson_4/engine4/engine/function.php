<?php


function render($page, $params = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}

function renderTemplate($page, $params = [])
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
