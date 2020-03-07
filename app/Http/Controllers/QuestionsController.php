<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        
        return view('questions.titles',[
            'questions' => $questions,
            ]);
    }
    public function show($id)
    {
        $question = Question::find($id);
        
        return view('questions.content',[
            'question' => $question,
            ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'content' => 'required|max:300',
            ]);
            
        $request->user()->questions()->create([
            'title' => $request->title,
            'content' => $request->content,
            ]);
            $user= \Auth::user();
            
            return view('users.show', [
                'user' => $user]);
    }
    public function destroy()
    {
        if (\Auth::id() === $question->user_id) {
            delete ();
        }
        return view('questions.index');
    }
}
