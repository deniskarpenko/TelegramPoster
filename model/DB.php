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
      $sql = $tables->fetchArray()['sql'];
      $tablesinfo = [];
        if (preg_match_all('/create table (.+?) \(/i', $sql, $tnames)) {
            for ($i = 0; $i < count($tnames[1]); $i++) {
                $fields = $this->getFieldsTable($tnames[1][$i]);
                array_push($tablesinfo, $fields);
            }
        }
        return $tablesinfo;
        
    }
    protected function getFieldsTable($table)
    {
        $fields = [];
        $fieldsarr = [];
        $tableinfo = $this->query("pragma table_info($table)");
            while ($fields = $tableinfo->fetchArray()) {
                $field =  [ 
                    'name' => $fields[1],
                    'type' => $fields[2]
                        ];
                array_push($fieldsarr, $field);
            }
        $fields['fields'] = $fieldsarr;   
        $fields['table'] = $table;
        return $fields;
    }
   public function executeQuery($sql)
   {
       $res = $this->query($sql);
       echo "$sql";
        while ($fields = $res->fetchArray()) {
            print_r($fields);
        }
   }
}             