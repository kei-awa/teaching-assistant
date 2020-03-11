<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function questions ()
    {
        return $this->hasMany(Question::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function answering()
    {
        return $this->belongsToMany(User::class , 'answers', 'user_id', 'question_id')->withPivot('content')->withTimestamps();
    }
    public function user_good()
    {
        return $this->belongsToMany(Article::class, 'article_good', 'user_id', 'article_id')->withTimestamps();
    }
    public function article_good()
    {
        return $this->belongsToMany(Article::class, 'article_good', 'article_id', 'user_id');
    }
    
    public function good($articleId)
    {
        $exist = $this->be_good($articleId);
        
        if ($exist) {
            return false;
        } else {
            $this->user_good()->attach($articleId);
            return true;
        }
    }
    public function not_good($articleId)
    {
        $exist = $this->be_good($articleId);
        
        if ($exist) {
            $this->user_good()->detach($articleId);
            return true;
        } else {
            return false;
        }
    
    }
    public function be_good($articleId)
    {
        return $this->user_good()->where('article_id', $articleId)->exists();
    }
    /*public function answer()
    {
        
        $this->answered()->attach();
        
        return true;
    }*/
}
