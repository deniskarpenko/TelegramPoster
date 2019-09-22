<?php
namespace model;

use SQLite3;

class DB extends SQLite3
{
    public function __construct($dbpath) 
    {
        $this->open($dbpath);
    }
}