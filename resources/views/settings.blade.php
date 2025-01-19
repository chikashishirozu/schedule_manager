@extends('layouts.app')

@section('content')
<body style="background-color: #dcdcdc;">
<div class="container">
    <div class="row justify-content-center" style="background-color: #e6e6fa;">
        <div class="col-md-8">
            <div class="card" style="background-color: #e6e6fa;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Settings') }}</span>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">{{ __('Dashboard') }}</a>
                </div>

                <div class="card-body" style="background-color: #e6e6fa;">
                    <form method="POST" style="background-color: #e6e6fa;" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" id="name" style="background-color: #f0f8ff;" name="name" value="{{ Auth::user()->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control" id="email" style="background-color: #f0f8ff;" name="email" value="{{ Auth::user()->email }}" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">{{ __('Update Profile') }}</button>
                            <a href="{{ route('profile') }}" class="btn btn-secondary">{{ __('Back to Profile') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

