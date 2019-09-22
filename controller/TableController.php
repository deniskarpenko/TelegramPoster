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
        $tables = $db->query("select * from sqlite_master where type = 'table'");
        //$tableinfo = $db->query("PRAGMA table_info('".$tables->fetchArray()['tbl_name']."')");
        //$sqltable = "PRAGMA table_info('".$tables->fetchArray()['name']."')";
     //   $tableinfo = $db->query("select * from ".$tables->fetchArray()['name']);
       // echo "$sqltable\n";
       print_r($tables->fetchArray());
       echo "\n!!!!!!!!!\n";
        echo $tables->fetchArray()['sql'];
    }
}

