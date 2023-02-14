<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\region;

class PrefectureController extends Controller
{
    //都道府県の値をprefectures_tableから取得
    public function getPrefecture()
    {
        // $pre = region::find(1)->prefectures->toArray();
        $regions = region::with('prefectures')->get();
        $test = "test";
        // dd($pre);
        return view('Users.Top', compact('regions'));
    }
}
