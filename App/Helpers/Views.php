<?php

namespace App\Helpers;

class Views{
    public static function make($view,$title,$models = []){
        ob_start();
        include dirname(__DIR__) . '/Views/' . $view . '.php';
        $content = ob_get_clean();
        include dirname(__DIR__) . '/Views/main.php';
    }
}