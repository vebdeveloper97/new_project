<?php
/* @var $params array */
/* @var $routers array */
function run()
{
    $view = $_SERVER['REQUEST_URI'];
    include_once LIBS . "/array.php";
    include_once CONFIG . "/params.php";
    include_once CONFIG . "/routers.php";
    include_once CONFIG . "/db.php";
    if (!($view == '/' || $view == '/index.php')) {
        /** @var $routers array */
        foreach ($routers as $key => $router) {
            if (preg_match($router, $view, $matches)) {
                break;
            }
        }
        $params['dir'] = $matches['controller'] ?? $params['dir'];
        $params['view'] = $matches['action'] ?? $params['action'];
        $params['id'] = $matches['id'] ?? $params['id'];
    }
    /** @var $params array */
    include_once BaseUrl . "/views/layouts/{$params['layout']}.php";
}