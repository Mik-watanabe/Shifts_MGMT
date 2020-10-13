@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.js"></script>
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    selectable: true,
    editable: true,
    firstDay: 1,
    displayEventEnd: true,
    
    events: "/api/shifts",

      
    // eventDrop: function(info){
    // //eventをドラッグしたときの処理
    //      //editEventDate(info);
    //     //あとで使う関数
    // },

    dateClick: function(info) {
    //日付をクリックしたときの処理
    
      addEvent(calendar,info);
    },

    
  });
  calendar.render();
});

function addEvent(calendar,info) {
        
          var startTime = prompt("開始時刻:");
          var endTime = prompt("終了時刻:");
          
          $.ajax({
            url: '/api/addEvent',
            type: 'POST',
            dataType: 'json',
            data: {
              'date': info.dateStr,
              'start': startTime,
              'end': endTime,
            },
          }).done(function(result){
            console.log(info.dateStr);
              calendar.addEvent({
              date: info.dateStr,
              start: info.dateStr+" "+startTime,
              end: info.dateStr+" "+endTime,
             });         
          });
}

</script>

<div id='calendar'></div>
@endsection
