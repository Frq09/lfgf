<x-app-layout>
    <x-slot name="header">
        募集一覧
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
            <a href='/posts/recruit'>募集を作成する</a>
            <div class='recruits'>
                @foreach ($recruits as $recruit)
                    <div class='recruitment'>
                        <h2 class='game'>ゲーム : {{ $recruit->game_title}}</h2>
　                      <a href='/profile/{{ $recruit->user_id }}'>ニックネーム：{{ $recruit->user->nickname }}</a>
                        <p class='playstyle'>プレイスタイル : {{ $recruit->playstyle }}</p>
                        <p class='body'>投稿文 : {{ $recruit->body }}</p>
                        <p class='date'>投稿日時 : {{ $recruit->created_at}}</p>
                        <a href='/posts/{{ $recruit->id }}'>この募集の詳細を見る</a>
                    </div>
                @endforeach
            </div>
            <div class='paginate'>
                {{ $recruits->links() }}
            </div>
        </body>
    </html>
</x-app-layout>