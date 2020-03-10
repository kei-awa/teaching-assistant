<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Answer extends Pivot
{
    protected $table = 'answer';
    
    public function answer ()
    {
        return $this->belongsTo(Question::class);
    }
}
