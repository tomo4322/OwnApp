<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use App\Models\region;

class ItemController extends Controller
{
    //出品登録する処理
    public function create(Request $request)
    {
        // $item = new Item;
        // $item->trade_place = $request->trade_place;
        // $item->trade_day = $request->trade_day;
        // $item->item_name = $request->item_name;
        // $item->length = $request->length;
        // $item->float = $request->float;
        // $item->select = $request->select;
        // $item->price = $request->price;

        

       
        $validatedData = $request->validate([
            'trade_day' => 'required',
            'trade_place' => 'required|max:255',
            'item_name' => 'required|max:255',
            'length' => 'required|max:255',
            'float' => 'required|max:100',
            'select' => 'required|max:50',
            'price' => 'required|max:50',
        ]);
       
        $item = new Item;
        $item->user_id = auth()->user()->id;
        $item->trade_day = $validatedData['trade_day'];
        $item->trade_place = $validatedData['trade_place'];
        $item->item_name = $validatedData['item_name'];
        $item->length = $validatedData['length'];
        $item->float = $validatedData['float'];
        $item->select = $validatedData['select'];
        $item->price = $validatedData['price'];
        $item->save();

        return redirect()->route('/completePutup');
    }

    //都道府県の値をprefectures_tableから取得
    public function getPrefecture()
    {
        // $pre = region::find(1)->prefectures->toArray();
        $regions = region::with('prefectures')->get();

        return view('Users.putUp', compact('regions'));
    }
}
