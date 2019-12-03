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
        $page->getHead('Выберите базу данных', ['https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css']);
        $page->getForm();
        $page->getFoot([
           'https://code.jquery.com/jquery-3.3.1.slim.min.js',
           'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
           'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
       ]); 
    }
}
