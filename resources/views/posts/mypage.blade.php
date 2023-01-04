<x-app-layout>
    <x-slot name="header">
        マイページ
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>フレンド募集サイト</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <div class="profile">
                <div class="basic_profile">
                    <h2>プロフィール画像</h2>
                    <img src={{ Auth::user()->image_url }} width="200" alt="画像が設定されていないか読み込むことができません">
                    <p class="nickname">ニックネーム：{{ Auth::user()->nickname }}</p>
                    <p class="user_id">ユーザーID：{{ Auth::user()->id }}</p>
                    <p>自己紹介：</p>
                    <p class="self_introduction">{{ Auth::user()->self_introduction}}</p>
                </div>
                <div class="edit_profile">
                    <a href='mypage/edit'>プロフィールを変更する</a>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>