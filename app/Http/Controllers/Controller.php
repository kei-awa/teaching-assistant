<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user)
    {
        $count_questions = $user->questions()->count();
        $count_articles = $user->user_good()->count();
        
        return [
            'count_questions' => $count_questions,
            'count_articles' => $count_articles,
            ];
    }
}
