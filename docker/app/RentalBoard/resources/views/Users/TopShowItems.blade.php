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
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ route('mypage') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">マイページ</a>
                <a href="{{ route('putUp') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">出品</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">会員登録</a>
                @endif
            @endauth
        </div>
    @endif
</header>
<body>
    <div>
        <h1>出品商品一覧</h1>
    </div>
    <div class="table">
        <table class="userItemsTable">
            <tr>
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
                <th>お気に入り</th>
                <th>お問い合わせ</th>
            </tr> 
            {{-- トップ画面でクリックされた都道府県とひも付いたデータをDbから取得してループさせて表示 --}}
            @foreach($items as $item)
            <tr>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</td>
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
                    <p>💛</p> 
                </td>
                <td class="chat">
                    <a href="" name="chat">チャットする</a> 
                </td>
            </tr>
            @endforea   ch
        </table>
        <div>
            <button type="button" onClick="history.back()">戻る</button>
        </div>
    </div>
</body>