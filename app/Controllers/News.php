<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view("template/header");
        echo view("template/footer");
    }

    public function gereja()
    {
        // return view('welcome_message');
        echo view("template/header");
        echo view("news/gereja");
        echo view("template/footer");
    }

    public function sektor()
    {
        // return view('welcome_message');
        echo view("template/header");
        echo view("news/sektor");
        echo view("template/footer");
    }

    public function unit()
    {
        // return view('welcome_message');
        echo view("template/header");
        echo view("news/unit");
        echo view("template/footer");
    }
}
