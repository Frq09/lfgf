<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Cloudinary; 

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
    
    public function report()
    {
        return view('posts/report');
    }
    
    public function profile(User $user)
    {
        return view('posts/profile')->with(['user' => $user]);
    }
    
    public function mypage(User $user)
    {
        return view('posts/mypage')->with(['users' => $user]);
    }
    
    public function mypage_edit(User $user)
    {
        return view('posts/mypage_edit')->with(['users' => $user]);
    }
    
    public function store(Request $request, Recruit $recruit)
    {
        $input = $request['recruit'];
        $userId = Auth::id();
        $recruit->user_id = $userId;
        $recruit->fill($input)->save();
        return redirect('/index');
    }
    
    public function edit_store(Request $request, User $user)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input = $request['user'];
        $input += ['image_url' => $image_url];
        $user = Auth::user();
        $user->fill($input)->save();
        return redirect('/mypage/');
    }
}
