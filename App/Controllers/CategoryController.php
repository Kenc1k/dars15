<?php

namespace App\Controllers;

class CategoryController{
    public function index(){
        include dirname(__DIR__) . '/Views/index.php';
    }

    public function about(){
        include dirname(__DIR__) . '/Views/about.php';
        
    }    
    public function contact(){
        include dirname(__DIR__) . '/Views/contact.php';
        
    }
}