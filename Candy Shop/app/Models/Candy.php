<?php

namespace App\Models;

class Candy 
{
    public static function find($type, $candy) {

        $path = resource_path("/{$type}/{$candy}.html");

        if (! file_exists($path)) {
            return dd("File does not exists");
        }
        
        return file_get_contents($path);
    }
}