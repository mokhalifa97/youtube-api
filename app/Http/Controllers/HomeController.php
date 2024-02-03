<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestDetails;
use Google\Client;
use Google\Service\Docs\Request;
use Google\Service\YouTube;

class HomeController extends Controller
{
    public function index(){

        return view('home');
    }
}


