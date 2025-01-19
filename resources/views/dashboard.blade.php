@extends('layouts.app')

@section('content')
<header style="background-color: #66cdaa;">
</header>
<body style="background-color: #dcdcdc;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #e6e6fa;">{{ __('Dashboard') }}</div>

                <div class="card-body" style="background-color: #e6e6fa;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- ダッシュボードに追加する他のリンクや機能 -->
                    <div class="mt-3" style="background-color: #e6e6fa;">
                        <h5>{{ __('Quick Links') }}</h5>
                        <ul class="list-group" style="background-color: #f0f8ff;">
                            <li class="list-group-item" style="background-color: #f0f8ff;">>
                                <a href="{{ route('schedules') }}">{{ __('View Schedule') }}</a>
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



