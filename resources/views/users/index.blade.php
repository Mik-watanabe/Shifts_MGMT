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
    eventTimeFormat: { // like '14:30:00'
    hour: '2-digit',
    minute: '2-digit',
    hour12: false
    },
    headerToolbar: {
    start: 'dayGridMonth,listMonth', // will normally be on the left. if RTL, will be on the right
    center: 'title',
    end: 'today,prev,next' // will normally be on the right. if RTL, will be on the left
    },

    events: "/api/shifts",

    dateClick: function(info) {
    //日付をクリックしたときの処理   
      addEvent(calendar,info);
    },
    // 入力済みの予定をクリックすると、編集or削除できる処理
    eventClick: function(info) {

      deleteEvent(calendar,info);
    }
  });
  calendar.render();
});

function deleteEvent(calendar,info) {
  
  var deleteShift = confirm('シフトを取り消しますか？');

  if(deleteShift) {
    $.ajax({
      url: '/api/deleteShift',
      type: 'POST',
      dataType:'json',
      data:{'id':info.event.id,
      },
    }).done(function(result){
      var event = calendar.getEventById(info.event.id)
      event.remove()
    });
  }
 
}

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
