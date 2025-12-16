@extends('layouts.app')

@section('content')
<body style="background-color: #dcdcdc;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #e6e6fa;">
                    <span>{{ __('Profile') }}</span>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">{{ __('Dashboard') }}</a>
                </div>

                <div class="card-body" style="background-color: #e6e6fa;">
                @auth
                    <div class="mb-3" style="background-color: #f0f8ff;">
                        <h5>{{ __('Name:') }} <span class="fw-bold">{{ Auth::user()->name ?? 'N/A'}}</span></h5>
                    </div>
                    <div class="mb-3" style="background-color: #f0f8ff;">
                        <h5>{{ __('Email:') }} <span class="fw-bold">{{ Auth::user()->email ?? 'N/A'}}</span></h5>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between" style="background-color: #e6e6fa;">
                        <a href="{{ route('settings') }}" class="btn btn-primary">{{ __('Edit Profile') }}</a>
                        <a href="{{ route('logout') }}" class="btn btn-danger">{{ __('Logout') }}</a>
                    </div>
                @else
                    <div class="alert alert-warning">
                        {{ __('セッションが切れています。再度ログインしてください。') }}
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-primary">{{ __('ログイン') }}</a>
                @endauth                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection


