<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
       echo "this is pages class";
    }
    function showme($page = 'home'){
        echo view('template/header');
        echo view('pages/'.$page);
        echo view('template/footer');
    }
}
