<?php
namespace component;

use controller\IndexController AS IndexController;
class Router{
    function __construct() 
    {
        
    }
    private function _getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
 
        if (!empty($_SERVER['PATH_INFO'])) {
            return trim($_SERVER['PATH_INFO'], '/');
        }
 
        if (!empty($_SERVER['QUERY_STRING'])) {
            return trim($_SERVER['QUERY_STRING'], '/');
        }
    }
 
    public function Route()
    {
        $path = $this->_getUri();
        if (empty($path)) {
             $controller = new IndexController();
             $controller->actionIndex();
        } else {
            $path_url = parse_url($path);
            $url_params = explode('/', $path_url['path']);
            $class_controller = "controller\\".ucfirst($url_params[0])."Controller";
            $method = isset($url_params[1]) ? "action".ucfirst($url_params[1]) : 'actionIndex';
            $controller = new $class_controller();
            $controller->$method();
            //$controller = new 
        }
    }
}

