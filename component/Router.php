<?php
namespace component;

use controller\IndexController AS IndexController;
use controller\TableController;
use controller\PostingController;

class Router{
    function __construct() {
        
    }
    public function getURI()
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
 
    public function Route(){
        $path = $this->getURI();
        if (empty($path)) {
             $controller = new IndexController();
             $controller->index();
        }
        elseif ($path == 'table/field') {
            $controller = new TableController($_POST['file']);
        }
        elseif ($path  == 'table/field/posting') {
           $controller = new PostingController();
        }
    }
}

