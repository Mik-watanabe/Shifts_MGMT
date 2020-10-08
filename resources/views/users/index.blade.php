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

    events: "/api/shifts",
      
        // eventDrop: function(info){
        // //eventをドラッグしたときの処理
        //      //editEventDate(info);
        //     //あとで使う関数
        // },

        dateClick: function(info) {
        //日付をクリックしたときの処理
            addEvent(calendar,info){
              
              var startTime = '2020-10-19 07:00:00';
              var endTime = '2020-10-19 13:00:00';

              $.ajax({
                url: "/api/addEvent",
                type: "POST",
                dataType: "json",
                data:{
                  "date":info.allDay,
                  "start":startTime,
                  "end":endTime
                }
              }).done(funtion(result){
                  calendar.addEvent({
                     id:result['user_id'],
                     date:info.allDay,
                     start:startTime,
                     end:endTime,
                  }); 
              });
            }
            
        },

    // dateClick: function(info){
    //   let title = prompt("希望の勤務時間を入力してください:");
     
    //   info.dayEl.innerText = title;

      
    // }

  });
  calendar.render();
});
</script>

<div id='calendar'></div>
@endsection
