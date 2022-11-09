<?php

namespace App\Controllers;

class Jemaat extends BaseController
{
    public function index()
    {
        echo view("template/header");
        echo view("jemaat/index");
        echo view("template/footer");
    }
    
}
