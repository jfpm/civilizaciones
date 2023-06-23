<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{   
    public function __construct()
    {
        $this->middleware('admin');
        
    }

    public static function usuarios(){

        $usuarios = User::all();
        return view('Admin.usuarios',compact('usuarios'));
    }
}
