@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    selectable: true,
    editable: true,
    firstDay: 1,
    displayEventEnd: true,
    headerToolbar: {
    start: 'dayGridMonth,listMonth', // will normally be on the left. if RTL, will be on the right
    center: 'title',
    end: 'today,prev,next' // will normally be on the right. if RTL, will be on the left
  },
    eventTimeFormat: { // like '14:30:00'
    hour: '2-digit',
    minute: '2-digit',
    hour12: false
    },

    events: "/api/manager",

  });

  calendar.render();
});

</script>

<div id='calendar'></div>
@endsection
