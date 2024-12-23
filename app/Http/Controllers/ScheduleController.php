<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule; // スケジュールのモデルをインポート
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 一覧表示
     */
    public function index()
    {
        // スケジュールを昇順で取得
        $schedules = Schedule::orderBy('start_time', 'asc')->get();
        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     * 新規作成フォームの表示
     */
    public function create()
    {
        return view('schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     * 新規作成処理
     */
    public function store(Request $request)
    {
        // バリデーションルールの定義
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        // バリデーションエラー時のリダイレクト
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // 新しいスケジュールの作成
        $schedule = new Schedule();
        $schedule->title = $request->input('title');
        $schedule->description = $request->input('description');
        $schedule->start_time = $request->input('start_time');
        $schedule->end_time = $request->input('end_time');
        $schedule->save();

        // スケジュール一覧ページへリダイレクト
        return redirect()->route('schedules.index')->with('status', 'スケジュールが追加されました。');
    }

    /**
     * Display the specified resource.
     * 指定されたスケジュールを表示
     */
    public function show(string $id)
    {
        // IDでスケジュールを取得
        $schedule = Schedule::findOrFail($id);
        return view('schedules.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     * 編集フォームの表示
     */
    public function edit(string $id)
    {
        // IDでスケジュールを取得し、編集フォームに渡す
        $schedule = Schedule::findOrFail($id);
        return view('schedules.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     * 更新処理
     */
    public function update(Request $request, string $id)
    {
        // バリデーションルールの定義
        $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_time' => 'required|date',
        'end_time' => 'required|date|after:start_time',
        ]);

        // バリデーションエラー時のリダイレクト
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // 指定されたスケジュールの更新
        $schedule = Schedule::findOrFail($id);
        $schedule->title = $request->input('title');
        $schedule->description = $request->input('description');
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->save();

        return redirect()->route('schedules.index')->with('success', 'スケジュールが更新されました。');
    }

    /**
     * Remove the specified resource from storage.
     * 削除処理
     */
    public function destroy(string $id)
    {
        // 指定されたスケジュールの削除
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->route('schedules.index')->with('success', 'スケジュールが削除されました。');
    }
}

