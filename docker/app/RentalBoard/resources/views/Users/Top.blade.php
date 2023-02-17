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
        <h1 class="title"><a href="{{ route('top') }}" class="headerBtn">Rent a Board</a></h1>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            @if ('owner_auth')
                <a href="{{ route('admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">管理者ページ</a>
            @endif
                <a href="{{ url('/mypage') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">マイページ</a>
                <a href="{{ url('/putUp') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">出品</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">会員登録</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="BoardSearch">
        <form  action="{{ route('searchItems') }}" method="get">
            <input type="search" name="keyword" placeholder="都道府県またはサーフボードブランドを入力">
            <button type="submit">検索</button>
        </form>
    </div>
</header>
<body>
    <div class="content">
        <h2>Rent a Board(レンタボード)</h2>
        <h2>サーフボードシェアプラットフォーム</h2>
    </div>
    <div>
        <h1>都道府県一覧</h1>
    </div>
    <div class="prefecture">
    <table>
        @foreach($regions as $region)
        <tr>
        <td>{{$region->name}}</td>
        @foreach($region->prefectures as $prefecture)
        <td><a href="{{ route('TopShowItems', $prefecture->id) }}">{{$prefecture->name}}</a></td>
        @endforeach
        </tr>
        @endforeach
    </table>
</body>