<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>会員登録完了画面</title>
</head>
<body>
    <div class="complete-container">
        <h1 class="complete_title">会員登録完了！！</h1>
        <div class="completText">
            <h2 class="thanksMessage">
                ご登録のメールアドレス宛に<br>
                完了メッセージを送信いたしました。
            </h2>
        </div>
        <div class="completeBtn"><a href="{{ route('Top') }}">トップ画面へ</a></div>
        </div>
</body>