<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //login
        return view('login_form');
    }

    public function restrita()
    {
        //restrita
        return view('area_restrita'); 
    }

}