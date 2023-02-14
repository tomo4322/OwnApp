<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>管理者ページ</title>
</head>
<header>
    <div class="header-title">
        <h1 class="title">Rent a Board</h1>
    </div>
    <div class="header-menu">
        <ul>
            <li><a href="{{ route('Top') }}" class="headerBtn">ログアウト</a></li>
        </ul>
    </div>
</header>
<body>
    <div class="mypage-title">
        <h1>管理者ページ</h1>
    </div>
    <div class="mypage-menu">
        <ul>
            <li><a href="" class="menu-btn">顧客一覧</a></li>
            <li><a href="" class="menu-btn">出品商品一覧</a></li>
            <li><a href="#" class="menu-btn">取引実績一覧</a></li>
            <li><a href="#" class="menu-btn">振込申請一覧</a></li>
            <li><a href="#" class="menu-btn">振込実績一覧</a></li>
        </ul>
    </div>
    <button type="button" onClick="history.back()">戻る</button>
</body>