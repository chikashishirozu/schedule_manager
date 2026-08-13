@extends('layouts.app')

@section('content')
<div class="app-page-bg py-4">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header app-card-header-bg">{{ __('新規スケジュール追加') }}</div>

                <div class="card-body app-card-bg">
                    <form action="{{ route('schedules.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('タイトル:') }}</label>
                            <input type="text" name="title" class="form-control app-input-bg" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('説明:') }}</label>
                            <textarea name="description" class="form-control app-input-bg"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="start_time" class="form-label">{{ __('開始時間:') }}</label>
                            <input type="datetime-local" name="start_time" class="form-control app-input-bg" required>
                        </div>

                        <div class="mb-3">
                            <label for="end_time" class="form-label">{{ __('終了時間:') }}</label>
                            <input type="datetime-local" name="end_time" class="form-control app-input-bg" required>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('追加') }}</button>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mt-3">
                        <a href="{{ route('schedules') }}" class="btn btn-secondary">{{ __('戻る') }}</a>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">{{ __('ダッシュボードへ戻る') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
