<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlatformController extends Controller
{
    public function index(){
        return view(Auth::user()->role.'.create_platform');
    }
}
