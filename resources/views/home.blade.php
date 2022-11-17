@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-info" role="alert">
                            A simple info alert with <a href="#" class="alert-link"> an example link </a>. give it a click if you like.
                        </div>
                    @endif
                        <div class="alert alert-info" role="alert">
                            A simple info alert with <a href="#" class="alert-link"> an example link </a>. give it a click if you like.
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
