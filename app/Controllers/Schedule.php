<?php

namespace App\Controllers;

class Schedule extends BaseController
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
        echo view("schedule/gereja");
        echo view("template/footer");
    }

    public function sektor()
    {
        // return view('welcome_message');
        echo view("template/header");
        echo view("schedule/sektor");
        echo view("template/footer");
    }

    public function unit()
    {
        // return view('welcome_message');
        echo view("template/header");
        echo view("schedule/unit");
        echo view("template/footer");
    }
    
}
