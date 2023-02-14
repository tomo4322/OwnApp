<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>会員詳細ページ</title>
</head>
<body>
    <div class="form-wrapper">
        <h1 class="createText">会員情報</h1>
        <table class="contact-table">
            <table>
                <tr>
                    <th class="contact-item">氏名</th>
                    <td>
                        <p>usersテーブルに登録されている氏名</p>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item" >生年月日</th>
                    <td>
                        <p>usersテーブルに登録されている生年月日</p> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">住所</th>
                    <td>
                        <p>usersテーブルに登録されている住所</p>  
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">メールアドレス</th>
                    <td>
                        <p>usersテーブルに登録されているメールアドレス</p>  
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">電話番号</th>
                    <td>
                        <p>usersテーブルに登録されている電話番号</p>  
                    </td>
                </tr>
            </table>
            <div>
                <div class="flex items-center justify-end mt-4">  
                <a class="#">パスワード再設定はこちらから</a>
            </div>
            <div>
                <button type="button" onClick="history.back()">戻る</button>
            </div>
            <div>
                <form action="{{ route('userUpdate') }}" method="get" name="modify">
                    <input type="submit" value="編集" class="btn btn-danger">
                </form>
            </div>
    </div>
</body>