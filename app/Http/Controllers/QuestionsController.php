<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::orderby('id','desc')->paginate(10);
        
        return view('question.titles',[
            'quetions' => $questions,
            ]);
    }
    public function show($id)
    {
        $question = Question::find($id);
        
        return view('quetion.content',[
            'question' => $question,
            ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'content' => 'required|max:300',
            ]);
            
        $requiest->user()->questions()->create([
            'title' => $request->title,
            'content' => $request->content,
            ]);
            
            return view('users.show');
    }
    public function destroy()
    {
        if (\Auth::id() === $question->user_id) {
            delete ();
        }
        return view('questions.index');
    }
}
