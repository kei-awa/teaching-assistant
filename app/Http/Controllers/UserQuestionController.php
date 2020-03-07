<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserQuestionController extends Controller
{
    public function question()
    {
        if (\Auth::check()) {
            return view('questions.create');
        }
    }
}
