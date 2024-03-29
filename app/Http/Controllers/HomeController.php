<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        if(Auth::check()){
            //redirect ke halaman login
            return redirect("login");
        }else{
            //masuk ke halaman chatbox
            return view("home");
        }
    }
}
