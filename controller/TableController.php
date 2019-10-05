<?php
namespace controller;

use model\DB;
use View\TableForm;

class TableController
{
    public function __construct($dbpath)
    {
        $page = new TableForm(); 
        $page->getHead('Выберите таблицу и поля');
        $db = new DB($dbpath);
        $tables = $db->getTablesInfo();
        print_r($tables);
    }
}

