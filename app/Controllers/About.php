<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view("template/header");
        echo view("about/index");
        echo view("template/footer");
    }
    
}
