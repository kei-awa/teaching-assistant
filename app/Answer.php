<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Answer extends Pivot
{
    protected $table = 'answers';
    
    public function answer()
    {
        return $this->belongsToMany(Question::class, 'answers', 'question_id', 'user_id')->withPivot('content')->withTimestamps();
    }
}
