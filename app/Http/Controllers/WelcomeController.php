<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class WelcomeController extends Controller
{
    
       public function welcome(){
       	
            $users=\App\User::all();
            return view('welcome',compact('users'));

       	}

    }
