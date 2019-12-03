<?php
namespace View;

class Page
{
    public function __construct() 
    {
        echo "<!DOCTYPE html>\n";
    }
    /*массив принимает title и массив ссылок для подключения css*/
    public function getHead($title, $links=[])
    {
        echo "<html>\n<head>\n<title>$title</title>\n</head>\n";
        if (count($links) > 0) {
            array_map(function($link){
                echo "<link href='$link' rel='stylesheet'>";
            }, $links);   
        }
    }
    public function getFoot($links)
    {
        array_map(function($link){
            echo "<script src='$link'></script>\n";
        }, $links);
        echo "</html>";
    }
}
