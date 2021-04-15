<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
   

    public function index() {
        return view('pages.index');
    }

    public function dashboard() {
         return 'Dashboard';
    }

    public function login()    {
        return 'login';
    }




}
