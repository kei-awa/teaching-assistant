<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
    //ログアウト&ログイン記事閲覧
Route::get('logout_articles', 'ArticlesController@index')->name('articles.titles');
Route::get('logout_articles/{id}', 'ArticlesController@read')->name('articles.content');

    //ログアウト&ログイン時のユーザーの質問アクション
Route::get('questions', 'QuestionsController@index')->name('question.titles');
Route::get('questions/{id}', 'QuestionsController@show')->name('question.content');


Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', 'UsersController');
    
    //ログイン時のユーザーの質問アクション
    Route::resource('questions', 'QuestionsController', ['only' => ['store','destroy']]);
    Route::get('question', 'UserQuestionController@question')->name('user.question');
    Route::get('loginquestions', 'QuestionsController@index')->name('loginquestion.titles');
    Route::get('loginquestions/{id}', 'QuestionsController@show')->name('loginquestion.content');
    //ログイン時記事投稿機能
    Route::resource('articles', 'UsersArticlesController');
    
});

