<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutCreateController extends Controller
{



    public function logoutCreate(){

        auth()->logout();

        return view('auth.register');


    }




}
