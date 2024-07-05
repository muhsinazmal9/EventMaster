@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <section class="row" id="hero_section">
            <div class="col-12">
                <h1 class="text-center fw-bold display-4">
                    Create, Manage,<br>View Events
                </h1>
                <p class="text-center hero-subtitle mt-3">Effortlessly organize and<br>track your events in a calendar view.</p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-5">
                    <a href="/" class="btn bg-body-tertiary px-4 py-2 rounded-0">Create Your Event</a>
                    <a href="/" class="btn px-4 py-2 bg-black text-white rounded-0">View Your Calendar</a>
                </div>
            </div>
        </section>
        <section class="row mt-5" id="screenshot_section">
            <div class="col-12">
                <img src="{{ asset('assets') }}/images/calendar_screenshot.jpeg" alt="Screenshot" class="img-fluid">
            </div>
        </section>
    </div>
@endsection
