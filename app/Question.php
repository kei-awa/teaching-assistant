<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['user_id', 'title', 'content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function answered()
    {
        return $this->belongsToMany(Question::class, 'answers', 'question_id', 'user_id')->using(Answer::class)->withPivot('content');
    }
    
}
