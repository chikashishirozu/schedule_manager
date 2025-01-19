@extends('layouts.app')

@section('content')
<header style="background-color: #66cdaa;">
</header>
<body style="background-color: #dcdcdc;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #e6e6fa;">{{ __('新規スケジュール追加') }}</div>

                <div class="card-body" style="background-color: #e6e6fa;">
                    <form action="{{ route('schedules.store') }}" style="background-color: #e6e6fa;" method="POST">
                        @csrf
                        <div class="mb-3" style="background-color: #e6e6fa;">
                            <label for="title" class="form-label">{{ __('タイトル:') }}</label>
                            <input type="text" style="background-color: #f0f8ff;" name="title" class="form-control" required>
                        </div>
                        
                        <div class="mb-3" style="background-color: #e6e6fa;">
                            <label for="description" class="form-label">{{ __('説明:') }}</label>
                            <textarea name="description" style="background-color: #f0f8ff;" class="form-control"></textarea>
                        </div>
                        
                        <div class="mb-3" style="background-color: #e6e6fa;">
                            <label for="start_time" class="form-label">{{ __('開始時間:') }}</label>
                            <input type="datetime-local" style="background-color: #f0f8ff;" name="start_time" class="form-control" required>
                        </div>
                        
                        <div class="mb-3" style="background-color: #e6e6fa;">
                            <label for="end_time" class="form-label">{{ __('終了時間:') }}</label>
                            <input type="datetime-local" style="background-color: #f0f8ff;" name="end_time" class="form-control" required>
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
                    <div class="mt-3" style="background-color: #e6e6fa;">
                        <a href="{{ route('schedules') }}" class="btn btn-secondary">{{ __('戻る') }}</a>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">{{ __('ダッシュボードへ戻る') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

