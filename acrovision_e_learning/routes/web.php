<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//新規登録完了ページ
Route::get('/registerCompletion', function () {
    return view('registerCompletion');
});
Route::get('/', function () {
    // welcom -> login に変更
    // return view('welcome');
    return view('auth/login');
});
//ログアウトクリック時、getLogoutメソッド呼び出し
Route::get('/logout',[App\Http\Controllers\UserController::class, 'getLogout']);

Auth::routes();
//堀 ログインしてない場合、リダイレクト（ログインページへ）
Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'admin_flg'], function () {
        Route::get('/user/{any}', function () {
            return view('userTop');
        })->where('any','.*');

        // 管理者ページクリック時、admin_flg判別
        Route::get('/admin/{any}', function () {
            return view('adminTop');
        })->where('any','.*');
    });

    //新規登録完了ページ
    Route::get('/registerCompletion', function () {
        return view('registerCompletion');
    });
});


Route::get('/axios/readTrainingTypes', [App\Http\Controllers\TrainingTypeController::class, 'read']);
Route::get('/axios/readChapters', [App\Http\Controllers\ChapterController::class, 'read']);
Route::get('/axios/readSchedules', [App\Http\Controllers\ScheduleController::class, 'read']);
Route::post('/axios/setSchedule', [App\Http\Controllers\ScheduleController::class, 'set']);
Route::get('/axios/readUsers', [App\Http\Controllers\UserController::class, 'read']);
Route::get('/axios/readLoginUser', [App\Http\Controllers\UserController::class, 'readLoginUser']);
Route::get('/axios/readLogChapter', [App\Http\Controllers\LogChapterController::class, 'read']);
Route::get('/axios/readCategories', [App\Http\Controllers\CategoryController::class, 'read']);

//森谷テスト
Route::post('/axios/addLogChapter', [App\Http\Controllers\LogChapterController::class, 'register']);
Route::post('/axios/deleteLogChapter', [App\Http\Controllers\LogChapterController::class, 'delete']);

//編集用
Route::post('/axios/editChapters', [App\Http\Controllers\ChapterController::class, 'update']);

// チャプター登録
Route::post('/axios/addChapter', [App\Http\Controllers\ChapterController::class, 'register']);
//カテゴリー登録
Route::post('/axios/addCategorys', [App\Http\Controllers\CategoryController::class, 'register_category']);
//ユーザー編集
Route::post('/axios/updataAuthUser', [App\Http\Controllers\UserController::class, 'updata']);
