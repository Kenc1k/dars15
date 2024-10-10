<?php

use App\Helpers\Views;

if(!function_exists('dd')){
    function dd(...$data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        exit;
    }
}

if(!function_exists('view')){
    function view($view,$title, $models = []){
        Views::make($view,$title,$models);
    }
}
if(!function_exists('view')){
        function view($view,$title, $models = []){
            Views::error($view,$title,$models);
        }
}