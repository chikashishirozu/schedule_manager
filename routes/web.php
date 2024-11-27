<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController; // プロフィール用コントローラー
use App\Http\Controllers\SettingsController; // 設定用コントローラー

// ウェルカムページをルートに設定
Route::get('/', function () {
    return view('welcome');
});

// 認証機能を有効化
Auth::routes();

// 認証後にアクセス可能なルートをグループ化
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // ダッシュボードのビューを返す
    })->name('dashboard');
    
    Route::resource('schedules', ScheduleController::class);
});

Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');

// プロフィール用ルート
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


// 設定用ルート
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

Route::delete('/schedules/{schedule}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');

