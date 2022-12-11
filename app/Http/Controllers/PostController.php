<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit;

class PostController extends Controller
{
    public function index(Recruit $recruit)
    {
        return view('posts/index')->with(['recruits' => $recruit->getPaginateByLimit()]);
    }
}
