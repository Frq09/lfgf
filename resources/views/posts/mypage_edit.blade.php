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
            <h2>プロフィール画像の変更</h2>
            <form action="/mypage_edit" method="POST" enctype="multipart/form-data">
                @csrf
                <div class='image'>
                    <input type="file" name="image" required>
                </div>
                <div class='nickname'>
                    <h2>ニックネーム</h2>
                    <input type="text" name="user[nickname]" placeholder="ニックネームを入力" required/>
                </div>
                <div class='self_introduction'>
                    <h2>ニックネーム</h2>
                    <input type="text" name="user[self_introduction]" placeholder="自己紹介を入力" required/>
                </div>
                <input type="submit" value="edit_store"/>
            </form>
            <div class="footer">
                <a href="/mypage">戻る</a>
             </div>
        </body>
    </html>
</x-app-layout>