<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\item;
use App\Models\region;
use App\Models\brand;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    //出品登録する処理
    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'user_id' => 'required|max:20',
            'prefecture_id' => 'required|max:20',
            'brand_id' => 'required|max:20',
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
        $item->prefecture_id = $request->prefecture_id;
        $item->brand_id = $request->brand_id;
        $item->trade_day = $request->trade_day;
        $item->trade_place = $request->trade_place;
        $item->item_name = $request->item_name;
        $item->length = $request->length;
        $item->float =$request->float;
        $item->select = $request->select;
        $item->price = $request->price;
        $item->save();

        return view('Users.completePutup');
    }

    public function getData()
    {
        // $pre = region::find(1)->prefectures->toArray();
        $regions = region::with('prefectures')->get();
        $brands = DB::table('brands')->get();
        return view('Users.putUp', compact('regions', 'brands'));
    }

    public function showItem(Request $request)
    {
        $user_id = Auth::id();
        $items = Item::with('prefecture')->where('user_id', '=', $user_id)->get();
        return view('Users.showItems', compact('items'));
    }

    public function updateItem(Request $request)
    {
        $id = $request->id;
        dd($id);
        // $brands = DB::table('brands')->get();
        $items = Item::with('prefecture', 'brands')->where('id', '=', $id)->get();
        return view('Users.updateItem', compact('brands', 'items'));
    }
}
