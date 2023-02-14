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
        <form action="{{ route('completePutup') }}" method="post" name="create-form">
            @csrf
        <table class="contact-table">
            <table>
                <tr>
                    <th class="contact-item">取引希望日時</th>
                    <td>
                    <input type="text" name="tradeDay" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item" >都道府県を選択してください</th>
                    <td>
                        <select name="prefecture_id">
                            {{-- @foreach($regions as $region)
                            <tr>
                            <td>{{$region->name}}</td>
                            @foreach($region->prefectures as $prefecture)
                            <td><a href="">{{$prefecture->name}}</a></td>
                            @endforeach
                            </tr>
                            @endforeach --}}
                            @foreach($regions as $region)
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
                    <input type="text" name="trade_place" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">サーフブランド名</th>
                    <td>
                    <input type="text" name="brand" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">サーフボード名</th>
                    <td>
                    <input type="text" name="boardName" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">長さ</th>
                    <td>
                    <input type="text" name="length" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">浮力</th>
                    <td>
                    <input type="text" name="float" class="form-text" value=""/> 
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">販売形式</th>
                    <td>
                        <input type="radio" name="sellTipe" value="レンタル">レンタル
                        <input type="radio" name="sellTipe" value="販売">販売
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">金額</th>
                    <td>
                    <input type="text" name="price" class="form-text" value=""/> 
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