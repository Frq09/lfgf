<x-app-layout>
    <x-slot name="header">
        投稿フォーム
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>フレンド募集サイト</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1>募集</h1>
            <form action="/recruits" method="POST">
                @csrf
                <div class="title">
                    <h2>ゲーム名</h2>
                    <input type="text" name="recruit[game_title]" placeholder="ゲーム名"/>
                </div>
                <div class="type">
                    <h2>募集タイプ</h2>
                    <input type="text" name="recruit[recruitment_type]" placeholder="募集タイプ"/>
                </div>
                <div class="style">
                    <h2>プレイスタイル</h2>
                    <input type="text" name="recruit[playstyle]" placeholder="プレイスタイル"/>
                </div>
                <div class="body">
                    <h2>募集テキスト</h2>
                    <textarea name="recruit[body]" placeholder="募集内容を入力"></textarea>
                </div>
                <input type="submit" value="投稿する"/>
            </form>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>