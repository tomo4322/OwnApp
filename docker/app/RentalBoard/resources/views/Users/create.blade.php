<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>会員登録</title>
</head>
<body>
    <div class="form-wrapper">
        <h1 class="">会員登録</h1>
        <div>
            <a href="{{ route('login') }}" class="link">会員登録がお済みの方はこちらから</a>
        </div>
        <form action="{{ route('completeUser') }}" method="post" name="create-form">
        <table class="contact-table">
            <table>
                <tr>
                    <th class="contact-item">氏名</th>
                    <td>
                    <input type="text" name="fullname" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item" >生年月日</th>
                    <td>
                    <input type="text" name="birth" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">住所</th>
                    <td>
                    <input type="text" name="address" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">メールアドレス</th>
                    <td>
                    <input type="text" name="email" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">電話番号</th>
                    <td>
                    <input type="text" name="tel" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">パスワード</th>
                    <td>
                    <input type="text" name="password" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">確認パスワード</th>
                    <td>
                    <input type="text" name="password" class="form-text" value=""/> 
                    </td>
                </tr>
            </table>
            <div>
                <button type="button" onClick="history.back()">キャンセル</button>
            </div>
            <div>
                <input type="submit" value="確認" class="btn btn-danger" onclick="return confirm('会員登録を行います。\n入力内容に変更が無ければ、\nOKボタンをクリックしてください。');">
            </div>
        </form>
    </div>
</body>