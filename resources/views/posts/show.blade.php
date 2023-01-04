<x-app-layout>
    <x-slot name="header">
        スレッド
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
            <div class="main">
                <h2>募集ID : {{ $rec->id }}</h2/>
                <h2>ゲーム : {{ $rec->game_title }}</h2/>
                <h2>募集タイプ : {{ $rec->recruitment_type }}</h2/>
                <h2>プレイスタイル : {{ $rec->playstyle }}</h2/>
            </div>
            <div class="content">
                <div class="content_post">
                    <h3>--------本文--------</h3>
                    <p>{{ $rec->body }}</p>    
                </div>
            </div>
            <div class="view_comment">
                <h2>コメント</h2>
                <p></p>
            </div>
            <div class="comment">
                <form action="/chat/{{ $rec->id }}" method="POST">
                    @csrf
                    <input type="text" name="chat[body]" placeholder="発言内容を入力"/>
                    <input type="submit" value="投稿する"/>
                </form>
            </div>
            <div class="footer">
                <a href="/index">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>