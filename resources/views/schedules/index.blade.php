@extends('layouts.app')

@section('content')
<header style="background-color: #66cdaa;">
</header>
<body style="background-color: #dcdcdc;">
<div class="container" style="background-color: #dcdcdc;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #e6e6fa;">
                <div class="card-header" style="background-color: #e6e6fa;">{{ __('スケジュール一覧') }}</div>

                <div class="card-body" style="background-color: #e6e6fa;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-3" style="background-color: #e6e6fa;">
                        <a href="{{ route('schedules.create') }}" class="btn btn-primary me-2">{{ __('新規追加') }}</a>
                    </div>              
                    
                    <ul class="list-group" style="background-color: #f0f8ff;">
                        @forelse ($schedules as $schedule)
                            <li class="list-group-item" style="background-color: #f0f8ff;">
                                <strong>{{ $schedule->title }}</strong><br> - {{ $schedule->start_time }} から {{ $schedule->end_time }}<br>詳細: {{ $schedule->description }}<br>                            
                                <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-sm btn-warning" style="float: right;">{{ __('編集') }}</a>
                            </li>
                        @empty
                            <li class="list-group-item" style="background-color: #e6e6fa;">{{ __('スケジュールがありません。') }}</li>
                        @endforelse
                    </ul>

                    <div class="mt-3" style="background-color: #f0f8ff;">
                        <h5>{{ __('Quick Links') }}</h5>
                        <ul class="list-group" style="background-color: #f0f8ff;">
                            <li class="list-group-item" style="background-color: #f0f8ff;">>
                                <a href="{{ route('dashboard') }}">{{ __('ダッシュボードへ戻る') }}</a>
                            </li>                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection



