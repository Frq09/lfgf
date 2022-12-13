<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Recruit $recruit)
    {
        return view('posts/index')->with(['recruits' => $recruit->getPaginateByLimit()]);
    }
    public function recruit()
    {
        return view('posts/recruit');
    }
    public function show(Recruit $recruit)
    {
        return view('posts/show')->with(['rec' => $recruit]);
    }
    public function store(Request $request, Recruit $recruit)
    {
        $input = $request['recruit'];
        $userId = Auth::id();
        $recruit->user_id = $userId;
        $recruit->fill($input)->save();
        return redirect('/');
    }
}
