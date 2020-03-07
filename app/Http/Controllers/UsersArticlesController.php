<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;

class UsersArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $articles = $user->articles()->get();
            $titles = $user->articles()->select('title')->get();
            
            $titles = $user->articles()->select('id');
            
            $data = [
                'user' => $user,
                'articles' => $articles,
                'titles' => $titles,
                ];
                
            return view('articles.index', $data);
        }
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::check()) {
            
            return view('articles.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (\Auth::check()) {
            $this->validate($request, [
            'title' => 'required|max:100',
            'content' => 'required|max:500',
            'introduction' => 'required|max:1000',
            ]);
            
        $request->user()->articles()->create([
            'title' => $request->title,
            'content' => $request->content,
            'introduction' => $request->introduction,
            'reference' => $request->reference,
            
            ]);
            
            $user= \Auth::user();
            
            return view('users.show', [
                'user' => $user]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \Auth::user();
        $article = $user->articles()->find($id);
            
        return view('articles.show',[
            'article' => $article,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
