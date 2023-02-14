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
            <li><a href="{{ route('putUp') }}" class="headerBtn">出品</a></li>
            <li><a href="{{ route('Top') }}" class="headerBtn">ログアウト</a></li>
        </ul>
    </div>
</header>
<body>
    <div class="mypage-title">
        <h1>マイページ</h1>
    </div>
    <div class="mypage-menu">
        <ul>
            <li><a href="{{ route('userDetail') }}" class="menu-btn">会員情報</a></li>
            <li><a href="{{ route('showItems') }}" class="menu-btn">出品商品一覧</a></li>
            <li><a href="#" class="menu-btn">お気に入り商品一覧</a></li>
            <li><a href="#" class="menu-btn">閲覧履歴</a></li>
            <li><a href="#" class="menu-btn">購入履歴</a></li>
            <li><a href="#" class="menu-btn">取引実績</a></li>
            <li><a href="#" class="menu-btn">振込申請一覧</a></li>
            <li><a href="#" class="menu-btn">振込実績</a></li>
        </ul>
    </div>
    <input type="submit" value="退会" class="btn btn-danger" onclick="return confirm('退会いたします。\nよろしいですか？');">
</body>