<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    // INDEX
    public function index()
    {
        if(Auth::user()->hasRole('administrator')){
            return view('panel.dashboard');

        } elseif(Auth::user()->hasRole('author')){
            return view('panel.dashboard');

        } elseif(Auth::user()->hasRole('editor')){
            return view('panel.dashboard');
        }
        elseif(Auth::user()->hasRole('supervisor')){
            return view('panel.dashboard');
        }
    }
}
