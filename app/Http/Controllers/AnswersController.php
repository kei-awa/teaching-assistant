<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;

class AnswersController extends Controller
{
    public function store(Request $request, $id)
    {
        if (\Auth::check()) {
            \Auth::user()->answering()->attach($id,[
                'content'=> $request->content,
                ]);
            
            return back();
        }
    }
}
