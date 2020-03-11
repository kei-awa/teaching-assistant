<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'introduction', 'reference'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function article_good()
    {
        return $this->belongsToMany(Article::class, 'article_good', 'article_id', 'user_id');
    }
}
