@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <p class="fw-bold display-5 m-0">Simplify Event Planning</p>
                <p class="text-secondary display-6 m-0">Sign in to your EventMaster account</p>
                @include('frontend.auth.partials.login-form')
            </div>
        </div>
    </div>
@endsection
