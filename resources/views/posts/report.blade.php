<x-app-layout>
    <x-slot name="header">
        報告フォーム
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
            <h1>報告</h1>
            <form action="/reports" method="POST">
                @csrf
                <div class="type">
                    <h2>報告の種類</h2>
                    <select name="reports[report_type]">
                        <option value="悪質な投稿">悪質な投稿</option>
                        <option value="悪質なコメント">悪質なコメント</option>
                        <option value="ゲーム内での暴言・煽り">ゲーム内での暴言・煽り</option>
                        <option value="チート行為">チート行為</option>
                    </select>
                </div>
                <div class="style">
                    <h2>報告内容</h2>
                    <input type="text" name="reports[body]" placeholder="どんなことをしていたかなど具体的に記入してください。"/>
                </div>
                <input type="submit" value="送信する"/>
            </form>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>