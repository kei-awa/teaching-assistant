<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Answer;

class QuestionsController extends Controller
{
    public function index()
    {
        /*if (\Auth::check()) {
            $user = \Auth::user();
            $questions = $user->questions()->get();
            $titles = $user->questions()->select('title')->get();
            $titles = $user->questions()->select('id');
            
            return view('questions.titles',[
                'questions' => $questions,
                'titles' => $titles,
                ]);
        } else {*/
            $questions = Question::all();
            $titles = Question::select('title')->get();
            $title = Question::select('id');
            
            return view('questions.titles',[
                'questions' => $questions,
                'titles' => $titles,
                ]);
        //}
    }
    public function show($id)
    {
        $user = \Auth::user();
        $question = $user->questions()->find($id);
        
        return view('questions.content',[
            'question' => $question,
            ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'content' => 'required|max:250',
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
    public function titles ()
    {
        if (\Auth::check()) {
            $user = \Auth::user();
            $questions = $user->questions()->get();
            $titles = $user->questions()->select('title')->get();
            $titles = $user->questions()->select('id');
            
            return view('questions.titles',[
                'questions' => $questions,
                'titles' => $titles,
                ]);
        } /*else {
            $questions = Question::all();
            $titles = Question::select('title')->get();
            $title = Question::select('id');
            
            return view('questions.titles',[
                'questions' => $questions,
                'titles' => $titles,
                ]);
        }*/
    }
    public function read($id)
    {
        $question = Question::find($id);
        $question_id = $question->id;
        $answers = Answer::where('question_id','=',$question_id)->get();
        
        
        return view('questions.content',[
            'question' => $question,
            'answers' => $answers,
            ]);
    }
}
