@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 py-5">
                <div id='calendar'></div>
            </div>
        </div>
    </div>


    @include('frontend.events.partials.create-event-modal')
@endSection


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js"></script>
    <script>
        $(document).ready(function() {
            var calendarEl = $('#calendar');
            var calendar = new FullCalendar.Calendar(calendarEl[0], {
                initialView: 'dayGridMonth',
                locale: 'en',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: @json($events),
                editable: true,
                eventClick: function(info) {
                    // open edit modal
                    console.log(info);
                }
            });
            calendar.on('dateClick', function(info) {
                // open create modal
                $('#createEventModal').modal('show');
                console.log(info);
                console.log(info.dateStr);
            });
            calendar.render();
        });
    </script>
@endpush
