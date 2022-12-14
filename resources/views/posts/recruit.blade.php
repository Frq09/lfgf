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
                    <select name="recruit[game_title]">
                        <option value="VALORANT">VALORANT</option>
                        <option value="APEX LEGENDS">APEX LEGENDS</option>
                        <option value="OVERWATCH2">OVERWATCH2</option>
                        <option value="COD WorZone2.0">COD WorZone2.0</option>
                        <option value="r6s">レインボーシックスシージ</option>
                    </select>
                </div>
                <div class="type">
                    <h2>募集タイプ</h2>
                    <select name="recruit[recruitment_type]">
                        <option value="フレンド募集">フレンド募集</option>
                        <option value="カスタムマッチ募集">カスタムマッチ募集</option>
                        <option value="コーチング募集">コーチング募集</option>
                    </select>
                </div>
                <div class="style">
                    <h2>プレイスタイル</h2>
                    <select name="recruit[playstyle]">
                        <option value="エンジョイ">エンジョイ</option>
                        <option value="本気/ガチ">本気/ガチ</option>
                    </select>
                </div>
                <div class="body">
                    <h2>募集テキスト</h2>
                    <textarea name="recruit[body]" placeholder="募集内容を入力"></textarea>
                </div>
                <input type="submit" value="投稿する"/>
            </form>
            
        </body>
    </html>
</x-app-layout>