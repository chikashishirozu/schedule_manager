@extends('layouts.app')

@section('content')
<div class="app-page-bg py-4">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header app-card-header-bg">{{ __('Dashboard') }}</div>

                <div class="card-body app-card-bg">
                    @if (session('status'))
                        <div class="alert alert-success app-input-bg" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
