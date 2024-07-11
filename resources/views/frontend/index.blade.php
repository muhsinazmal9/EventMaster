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
                    <x-links.secondary class="px-4 py-2">Create Your Event</x-links.secondary>
                    <x-links.primary class="px-4 py-2">View Your Calendar</x-links.primary>
                </div>
            </div>
        </section>
        <section class="row" id="screenshot_section">
            <div class="col-12">
                <img src="{{ asset('assets') }}/images/calendar-mockup.png" alt="Screenshot" class="img-fluid">
            </div>
        </section>
    </div>
@endsection
