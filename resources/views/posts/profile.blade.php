<x-app-layout>
    <x-slot name="header">
        プロフィール
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
                <h2>プロフィール画像</h2>
                <img src={{ $user->image_url }} width="200" alt="プロフィール画像が設定されていません">
                <p class="nickname">ニックネーム：{{ $user->nickname }}</p>
                <p class="user_id">ユーザーID：{{ $user->id }}</p>
                <p>自己紹介：</p>
                <p class="self_introduction">{{ $user->self_introduction}}</p>
            </div>
            <div class="report">
                <a href='report/'>このユーザーを報告する</a>
            </div>
        </body>
    </html>
</x-app-layout>