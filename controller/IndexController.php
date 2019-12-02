<?php
namespace controller;

use View\SqliteConnectForm;

class IndexController
{
    public function __construct()
    {
    }
    public function actionIndex()
    {
        $page = new SqliteConnectForm();
        $page->getHead("Выберите базу данных");
        $page->getForm();
    }
}
