@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('スケジュール一覧') }}</div>

                <div class="card-body">
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
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $schedule->title }} - {{ $schedule->start_time }} から {{ $schedule->end_time }}
                                <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-sm btn-warning">{{ __('編集') }}</a>
                            </li>
                        @empty
                            <li class="list-group-item">{{ __('スケジュールがありません。') }}</li>
                        @endforelse
                    </ul>

                    <div class="mt-3">
                        <h5>{{ __('Quick Links') }}</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('dashboard') }}">{{ __('ダッシュボードへ戻る') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



