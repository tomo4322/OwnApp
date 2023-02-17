<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //ユーザー情報を表示
    public function show()
    {
        $user = Auth::user();
        return view('Users.userDetail', [ 'user' => $user ]);
    }

    //ユーザー情報を更新ページ
    public function edit()
    {
        $user = Auth::user();
        return view('Users.userUpdate', [ 'user' => $user ]);
    }

    //ユーザー情報を更新
    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        // dd($user);
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return view('Users.mypage');
    }
}
