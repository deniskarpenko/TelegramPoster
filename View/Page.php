<?php
namespace View;

class Page
{
    public function __construct() 
    {
        echo "<!DOCTYPE html>\n";
    }
    public function getHead($title)
    {
        echo "<html>\n<head>\n<title>$title</title>\n</head>\n";
    }
}
