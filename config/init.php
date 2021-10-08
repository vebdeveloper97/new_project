<?php
/* @var $params array */
/* @var $routers array */
function run()
{
    $view = trim($_SERVER['REQUEST_URI'], '/');
    include_once LIBS . "/array.php";
    include_once CONFIG . "/params.php";
    include_once CONFIG . "/routers.php";
    include_once CONFIG . "/db.php";

    /** @var $routers array */
    foreach ($routers as $key => $router) {
        if (preg_match($router, $view, $matches)) {
            break;
        }
    }
    $params['module'] = array_key_exists('module', $matches) ? $matches['module'] : '';
    $params['controller'] = array_key_exists('controller', $matches) ? $matches['controller'] : $params['controller'];
    $params['action'] = array_key_exists('action', $matches) ? $matches['action'] : $params['action'];
    $params['id'] = array_key_exists('id', $matches) ? $matches['id'] : $params['id'];

    if (empty($params['module'])) {
        include_once BaseUrl . "/views/layouts/{$params['layout']}.php";
    } else {
        include_once BaseUrl . "/admin/views/layouts/{$params['layout']}.php";
    }


}