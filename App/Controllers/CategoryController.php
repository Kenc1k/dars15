<?php

namespace App\Controllers;

use App\Helpers\Views;

class CategoryController{
    public function index(){
        return view('index' , 'Bosh sahifa');
    }

    public function about(){
        return view('about' , 'About sahifa');
    }    
    public function contact(){
        return view('contact' , 'Contact sahifa');
        
    }
}