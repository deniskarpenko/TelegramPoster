<?php
namespace model;

use model\DB;

class Telegram
{
    public function __construct() 
    {
    }
    public function startPosting($post)
    {
        $sql = 'select ';
        if (isset($post['name'])) {
            $sql.= 'name';
        }
        if (isset($post['text'])) {
            $sql.= ',text';
        }
        if (isset($post['link'])) {
            $sql.= ',link';
        }
        if (isset($post['img'])) {
            $sql.= ',img';
        }
        if (isset($post['video'])) {
            $sql.= ',video';
        }
        $sql.= " from ".$post['tb'];
        $this->_getPostMessageFromD($sql);
       
    }
    private function _getPostMessageFromD($sql)
    {
           $db = new DB($dbpath);
           $db->executeQuery($sql);
    }
    
    
}
