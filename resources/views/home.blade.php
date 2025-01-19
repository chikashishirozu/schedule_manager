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
                        <div class="alert alert-success" style="background-color: #f0f8ff;" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
