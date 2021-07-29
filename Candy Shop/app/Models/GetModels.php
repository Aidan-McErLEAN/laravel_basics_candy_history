<?php

namespace App\Models;

class GetModels 
{
    public $title, $img, $body, $link;

    public function __construct($title, $img, $body, $link) 
    {
        $this->title = $title;
        $this->img = $img;
        $this->body = $body;
        $this->link = $link;
    }
}

