<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function apropos(){
        return view("apropos.apropos");
    }
    public function confidalite(){
        return view("confidalite.confidalite");
    }
    public function url(){
        return view("url.url");
    }
}
