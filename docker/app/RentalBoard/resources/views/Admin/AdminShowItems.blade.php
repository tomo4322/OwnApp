<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>商品一覧ページ</title>
</head>
<body>
    <div>
        <h1>商品一覧</h1>
    </div>
    <div class="table">
        <table class="userItemsTable">
            <tr>
                <th>ID</th>
                <th>出品日</th>
                <th>希望日時</th>
                <th>都道府県</th>
                <th>希望取引場所</th>
                <th>ブランド名</th>
                <th>ボード名</th>
                <th>長さ</th>
                <th>浮力</th>
                <th>販売形式</th>
                <th>金額</th>
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn" href="{{ route('AdminItemsEdit') }}">編集</a> <!--- 編集ボタンクリック時にクリック箇所のidをGETでに渡している --->
                </td>
                <td class="delete">
                    <a href="{{ route('AdminShowItems') }}" onclick="return confirm('本当に削除しますか？')" name="delete">削除</a> <!--- 削除ボタンクリック時にポップアップ表示 --->
                </td>
            </tr>
            {{-- @endforeach --}}
        </table>
        <div>
            <button type="button" onClick="history.back()">戻る</button>
        </div>
    </div>
</body>