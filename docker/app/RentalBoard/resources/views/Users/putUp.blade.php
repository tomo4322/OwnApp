<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>出品ページ</title>
</head>
<body>
    <div class="form-wrapper">
        <h1 class="createText">出品する</h1>
        @foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
        <form action="{{ route('putUp') }}" method="post" name="create-form">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <table class="contact-table">
            <table>
                <tr>
                    <th class="contact-item">取引希望日時</th>
                    <td>
                    <input type="date" name="trade_day" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item" >都道府県を選択してください</th>
                    <td>
                        <select name="prefecture_id">
                            @foreach($regions as $region)
                            <option hidden>選択してください</option>
                            @foreach($region->prefectures as $prefecture)
                                <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                            @endforeach
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">希望取引場所</th>
                    <td>
                    <input type="text" name="trade_place" class="form-text" value="{{ old('trade_place') }}" placeholder="例)湘南エリア"/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">サーフブランド名</th>
                    <td>
                    <select name="brand_id">
                        <option hidden>選択してください</option>
                        @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">サーフボード名</th>
                    <td>
                    <input type="text" name="item_name" class="form-text" value="{{ old('item_name') }}" placeholder="例)OGフライヤー"/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">長さ</th>
                    <td>
                    <input type="text" inputmode="numeric" name="length" class="form-text" value="{{ old('length') }}" placeholder="例)5.8フィート "/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">浮力</th>
                    <td>
                    <input type="text" inputmode="numeric" name="float" class="form-text" value="{{ old('float') }}" placeholder="例)28リットル"/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">販売形式</th>
                    <td>
                        <input type="radio" name="select" value="レンタル">レンタル
                        <input type="radio" name="select" value="販売">販売
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">金額</th>
                    <td>
                    <input type="text" name="price" class="form-text" value="{{ old('price') }}"/> 
                    </td>
                </tr>
            </table>
            <div>
                <button type="button" onClick="history.back()">キャンセル</button>
            </div>
            <div>
                <input type="submit" value="確認" class="btn btn-danger" onclick="return confirm('商品を出品いたします。\n入力内容が正しければ、\nOKボタンをクリックしてください。');">
            </div>
        </form>
    </div>
</body>