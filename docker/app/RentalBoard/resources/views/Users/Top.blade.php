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
        {{-- <li><a href="{{ route('mypage') }}" class="headerBtn">管理画面</a></li>
        <li><a href="{{ route('mypage') }}" class="headerBtn">マイページ</a></li>
        <li><a href="{{ route('putUp') }}" class="headerBtn">出品</a></li> --}}
        </ul>
    </div>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/mypage') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">マイページ</a>
                <a href="{{ url('/putUp') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">出品</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="BoardSearch">
        <form  action="" method="post">
            <input type="search" name="search" placeholder="都道府県またはサーフボードブランドを入力">
            <input type="submit" name="submit" value="検索">
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
        <td><a href="">{{$prefecture->name}}</a></td>
        @endforeach
        </tr>
        @endforeach
    </table>
</body>