<?php
namespace controller;

use View\SqliteConnectForm;

class IndexController
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $page = new SqliteConnectForm();
        $page->getHead("Выберите базу данных");
        $page->getForm();
    }
}
