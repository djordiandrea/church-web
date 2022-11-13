<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // echo view("template/header");
        // echo view("home/index");
        // echo view("template/footer");
        echo view("template/home-carousel");
    }
}
