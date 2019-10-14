<?php
namespace controller;

use model\Telegram;

class PostingController
{
    public function __construct() {
        $model = new Telegram();
        $model->startPosting($_POST);
    }
}