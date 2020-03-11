<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /*public function index() 
    {
        
    }
    */
    public function show($id) 
    {
        $user = User::find($id);
        
        return view('users.show', [
            'user' => $user,
            /*'email' => $email,
            'profile' => $profile,
            */
        ]);
    }
}