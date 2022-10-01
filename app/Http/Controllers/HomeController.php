<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Login;
use App\Http\Controllers;



class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function home(){
        return view('home');
    }
    public function login(){
        Login::whereIn('username','=',[admin])
                      ->where('password','=',[000])
                      ->get();
            return view('admin_sidebar');
    }
    public function about(){
        return view('about');
    }
    public function user_registration(){
        return view('user_register');
    }
    public function save_register(){
        $name=request('name');
        $email=request('email');
        $number=request('number');
        $username=request('username');
        $password=request('password');
    User::create([
            
            'name'=>$name,
            'email'=>$email,
            'contact_no'=>$number,
            'username'=>$username,
            'password'=>$password,
        ]);
       return redirect('home');
    }
    

}
