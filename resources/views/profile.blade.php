@extends('layouts.app')

@section('content')
<div class="app-page-bg py-4">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header app-card-header-bg d-flex justify-content-between align-items-center">
                    <span>{{ __('Profile') }}</span>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">{{ __('Dashboard') }}</a>
                </div>

                <div class="card-body app-card-bg">
                @auth
                    <div class="mb-3 app-input-bg p-2 rounded">
                        <h5>{{ __('Name:') }} <span class="fw-bold">{{ Auth::user()->name ?? 'N/A'}}</span></h5>
                    </div>
                    <div class="mb-3 app-input-bg p-2 rounded">
                        <h5>{{ __('Email:') }} <span class="fw-bold">{{ Auth::user()->email ?? 'N/A'}}</span></h5>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between">
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
</div>
@endsection
