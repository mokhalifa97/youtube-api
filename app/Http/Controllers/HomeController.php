<?php

namespace App\Http\Controllers;
use Google\Client;
use Google\Service\YouTube;

class HomeController extends Controller
{
    public function index(){

        return view('home');
    }
}


