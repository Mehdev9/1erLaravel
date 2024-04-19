<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class etudiants extends Controller
{
    public function etudiants(){
        return view('sign-up');
    }
    public function add(){
        return view('liste', [
            'users' => User::all()
        ]);
    }
}
