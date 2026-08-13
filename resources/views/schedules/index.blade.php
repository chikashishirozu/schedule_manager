@extends('layouts.app')

@section('content')
<div class="app-page-bg py-4">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card app-card-bg">
                <div class="card-header app-card-header-bg">{{ __('スケジュール一覧') }}</div>

                <div class="card-body app-card-bg">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <a href="{{ route('schedules.create') }}" class="btn btn-primary me-2">{{ __('新規追加') }}</a>
                    </div>

                    <ul class="list-group">
                        @forelse ($schedules as $schedule)
                            <li class="list-group-item app-list-bg">
                                <strong>{{ $schedule->title }}</strong><br> - {{ $schedule->start_time }} から {{ $schedule->end_time }}<br>詳細: {{ $schedule->description }}<br>
                                <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-sm btn-warning" style="float: right;">{{ __('編集') }}</a>
                            </li>
                        @empty
                            <li class="list-group-item app-card-bg">{{ __('スケジュールがありません。') }}</li>
                        @endforelse
                    </ul>

                    <div class="mt-3">
                        <h5>{{ __('Quick Links') }}</h5>
                        <ul class="list-group">
                            <li class="list-group-item app-list-bg">
                                <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">{{ __('ダッシュボードへ戻る') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
