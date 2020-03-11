<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersGoodContoller extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->good($id);
        
        return back();
    }
    public function destroy($id)
    {
        \Auth::user()->not_good($id);
        
        return back();
    }
}
