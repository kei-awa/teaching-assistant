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
        return $this->belongsToMany(User::class, 'article_good', 'user_id', 'article_id')->withTimestamps();
    }
    
    public function be_good($userId)
    {
        return $this->user_good()->where('article_id', $userId)->exists();
    }
    
    public function good($userId)
    {
        $exist = be_good($userId);
        
        if ($exist) {
            return false;
        } else {
            $this->user_good()->attach($userId);
            return true;
        }
    }
    public function not_good($userId)
    {
        $exist = be_good($userId);
        
        if ($exist) {
            $this->user_good()->detach($userId);
            return true;
        } else {
            return false;
        }
    }
    /*public function answer()
    {
        
        $this->answered()->attach();
        
        return true;
    }*/
}
