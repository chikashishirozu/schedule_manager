<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        // 設定表示のロジックをここに追加
        return view('settings'); // settings.blade.phpを返す
    }
}
