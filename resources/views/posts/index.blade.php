<x-app-layout>
    <x-slot name="header">
        ヘッダー名
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
            <h1>募集一覧</h1>
            <div class='recruits'>
                @foreach ($recruits as $recruit)
                    <div class='recruitment'>
                        <h2 class='user'>{{ $recruit->user_id}}</h2>
                        <p class='playstyle'>{{ $recruit->playstyle }}</p>
                        <p class='body'>{{ $recruit->body }}</p>
                        <p class='date'>{{ $recruit->created_at}}</p>
                    </div>
                @endforeach
            </div>
            <div class='paginate'>
                {{ $recruits->links() }}
            </div>
        </body>
    </html>
</x-app-layout>