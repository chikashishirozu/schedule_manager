@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- ダッシュボードに追加する他のリンクや機能 -->
                    <div class="mt-3">
                        <h5>{{ __('Quick Links') }}</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('schedule') }}">{{ __('View Schedule') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



