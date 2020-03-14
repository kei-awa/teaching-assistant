<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Answer;
use DB;

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
    public function best_answer(Request $request, $id) 
    {
        $answer = Answer::find($id);
        
        
        $answer->increment('best_answer');
        $answer->save();
        //DB::table('answers')->increment('best_answer');
        
        return back();
    }
}
