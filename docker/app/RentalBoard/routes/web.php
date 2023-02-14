<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// トップ画面を表示
Route::get('/', [PrefectureController::class, 'getPrefecture']);

// 出品画面表示

Route::get('/putUp', [ItemController::class, 'getPrefecture'])->middleware(['auth']);

// 出品完了画面を表示
Route::post('/putUp', [ItemController::class, 'create'])->name('putUp')->middleware(['auth']);
// Route::get('/completePutup', function () {
//     return view('Users.completePutup');
// })->middleware(['auth'])->name('completePutup');


// マイページ画面を表示
Route::get('/mypage', function () {
    return view('Users.mypage');
})->middleware(['auth'])->name('mypage');

// 出品画面を表示
// Route::get('/putUp', function () {
//     return view('Users.putUp');
// })->middleware(['auth'])->name('putUp');

// 会員情報画面を表示
Route::get('/userDetail', function () {
    return view('Users.userDetail');
})->middleware(['auth'])->name('userDetail');

// 出品商品画面を表示
Route::get('/showItems', function () {
    return view('Users.showItems');
})->middleware(['auth'])->name('showItems');



// 会員編集画面を表示
Route::get('/userUpdate', function () {
    return view('Users.userUpdate');
})->middleware(['auth'])->name('userUpdate');

// 商品編集画面を表示
Route::get('/updateItems', function () {
    return view('Users.updateItems');
})->middleware(['auth'])->name('updateItems');

// 商品一覧画面を表示
Route::get('/showItems', function () {
    return view('Users.showItems');
})->middleware(['auth'])->name('showItems');

// トップの商品一覧画面を表示
Route::get('/TopShowItems', function () {
    return view('Users.TopShowItems');
})->name('TopShowItems');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
