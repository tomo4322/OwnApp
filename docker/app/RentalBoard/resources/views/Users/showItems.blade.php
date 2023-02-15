<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Rent a Board</title>
</head>
<header>
    <div class="header-title">
        <h1 class="title">Rent a Board</h1>
    </div>
    <div class="header-menu">
        <ul>
        <li><a href="{{ route('mypage') }}" class="headerBtn">マイページ</a></li>
        <li><a href="{{ route('putUp') }}" class="headerBtn">出品</a></li>
        <li><a href="{{ route('top') }}" class="headerBtn">ログアウト</a></li>
        </ul>
    </div>
</header>
<body>
    <div>
        <h1>出品商品一覧</h1>
    </div>
    <div class="table">
        <table class="userItemsTable">
            <tr>
                <th>ID</th>
                <th>出品日</th>
                <th>希望日</th>
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
            @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->created_at}}</td>
                <td>{{ $item->trade_day }}</td> 
                <td>{{ $item->prefecture->name}}</td>     
                <td>{{ $item->trade_place }}</td>
                <td>{{ $item->brand->name }}</td>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->length }}</td>
                <td>{{ $item->float }}</td>
                <td>{{ $item->select }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    {{-- <a class="btn" href="{{ route('updateItem', $item->id) }}">編集</a> <!--- 編集ボタンクリック時にクリック箇所のidをGETでに渡している ---> --}}
                    <button type="button" onclick="location.href='{{ route('updateItem', $item->id) }}'">編集</button>
                </td>
                <form action="{{ route('destroy', $item->id) }}" method="post" name="create-form">
                    @csrf
                    @method('delete')
                <td class="delete">
                    <input type="submit" onclick="return confirm('本当に削除しますか？')" value="削除">
                    {{-- <a href="{{ route('showItems', $item->id) }}" onclick="return confirm('本当に削除しますか？')" name="delete">削除</a> <!--- 削除ボタンクリック時にポップアップ表示 ---> --}}
                </td>
            </tr>
            @endforeach
            </form>
        </table>
        <div>
            <button type="button" onClick="history.back()">戻る</button>
        </div>
    </div>
</body>