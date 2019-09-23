<?php
namespace model;

use SQLite3;

class DB extends SQLite3
{
    public function __construct($dbpath) 
    {
        $this->open($dbpath);
    }
    public function getTablesInfo()
    {
       $tables = $this->query("select * from sqlite_master where type = 'table'");
       echo "test - ".$tables->fetchArray()['sql'];
        
    }
    /*Метод принимает */
    public function getInfoTableFromSQL($sql)
    {
        
    }
}