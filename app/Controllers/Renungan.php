<?php

namespace App\Controllers;

class Renungan extends BaseController
{
    public function index()
    {
        echo view("template/header");
        echo view("renungan/index");
        echo view("template/footer");
    }
    
}
