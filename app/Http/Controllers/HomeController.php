<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function home(){
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function about(){
        return view('about');
    }
    public function registration(){
        return view('registration');
    }
}