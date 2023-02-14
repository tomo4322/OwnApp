<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>顧客管理ページ</title>
</head>
<body>
    <div>
        <h1>顧客一覧</h1>
    </div>
    <div class="table">
        <table class="userItemsTable">
            <tr>
                <th>Id</th>
                <th>氏名</th>
                <th>生年月日</th>
                <th>住所</th>
                <th>メールアドレス</th>
                <th>TEL</th>
                <th>編集</th>
                <th>削除</th>
            </tr> 
            Dbから取得したデータをループさせて表示
            {{-- @foreach($prefectures as $pref) --}}
            <tr>
                <td></td>
                <td></td>
                <td></td>     
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn" href="{{ route('AdminUserEdit') }}">編集</a> <!--- 編集ボタンクリック時にクリック箇所のidをGETでに渡している --->
                </td>
                <td class="delete">
                    <a href="{{ route('AdminShowUser') }}" onclick="return confirm('本当に削除しますか？')" name="delete">削除</a> <!--- 削除ボタンクリック時にポップアップ表示 --->
                </td>
            </tr>
            {{-- @endforeach --}}
        </table>
        <div>
            <button type="button" onClick="history.back()">戻る</button>
        </div>
    </div>
</body>