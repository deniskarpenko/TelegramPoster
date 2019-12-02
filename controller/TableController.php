<?php
namespace controller;
use model\DB;
use View\TableForm;
use component\ConfigReadWrite;

class TableController
{
    public function __construct($dbpath='')
    {
       echo "\n\n".__METHOD__."\n\n";
    }
    public function actionIndex()
    {
        echo "index\n";
    }
    public function  actionDraw()
    {
        echo "\n\n".__METHOD__."\n\n";
    }
}
