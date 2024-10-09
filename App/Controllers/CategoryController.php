<?php

namespace App\Controllers;

class CategoryController{
    public function index(){
        $models = Categorys::all();
        return view('index' , 'Home' , $models);
    }

    public function about(){
        return view('about' , 'About sahifa');
    }
}