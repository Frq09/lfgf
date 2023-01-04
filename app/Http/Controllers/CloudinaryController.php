<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudinary; //use宣⾔するのを忘れずに
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CloudinaryController extends Controller
    {
    public function cloudinary()
    {
        return view('posts/mypage'); //cloudinary.blade.phpを表⽰
    }
    public function cloudinary_store(Request $request, User $user)
    {
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代⼊している
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $user->image_url = $image_url;
        $user->save();
        return view('posts/mypage');
    }
}
