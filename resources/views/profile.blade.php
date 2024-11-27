@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Profile') }}</span>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">{{ __('Dashboard') }}</a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h5>{{ __('Name:') }} <span class="fw-bold">{{ Auth::user()->name }}</span></h5>
                    </div>
                    <div class="mb-3">
                        <h5>{{ __('Email:') }} <span class="fw-bold">{{ Auth::user()->email }}</span></h5>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('settings') }}" class="btn btn-primary">{{ __('Edit Profile') }}</a>
                        <a href="{{ route('logout') }}" class="btn btn-danger">{{ __('Logout') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


