@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    selectable: true
  });
  calendar.render();
});
</script>

<div id='calendar'></div>
@endsection
