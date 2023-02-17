<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\item;
use App\Models\region;
use App\Models\brand;
use App\Models\prefecture;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // $items = Item::with('prefecture')->where('user_id', '=', $user_id)->get();
        $items = Item::query()
        ->orWhere('trade_day', 'LIKE', "%{$keyword}%")
        ->orWhere('trade_place', 'LIKE', "%{$keyword}%")
        ->orWhere('item_name', 'LIKE', "%{$keyword}%")
        ->orWhere('length', 'LIKE', "%{$keyword}%")
        ->orWhere('float', 'LIKE', "%{$keyword}%")
        ->orWhere('select', 'LIKE', "%{$keyword}%")
        ->orWhereHas('prefecture', function ($query) use ($keyword) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        })
        ->orWhereHas('brand', function ($query) use ($keyword) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        })
        ->paginate(10);

        // dd($items);
        return view('Users.searchItems', compact('items'));
    }
}
