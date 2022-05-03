<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function index()
    {
        return view('top');
    }

    public function welcome()
    {
        echo 'welcome';
    }

    public function logout()
    {
        Auth::logout();
        return view('/welcome');
    }
}
