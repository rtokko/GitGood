<!DOCTYPE html>

<html lang='en'>

<head>
    <meta charset='utf-8' />

    <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='node_modules/@fullcalendar/list/main.css' rel='stylesheet' />

    <script src='fullcalendar/packages/core/main.js'></script>
    <script src='fullcalendar/packages/daygrid/main.js'></script>
    <script src='fullcalendar/packages/google-calendar/main.js'></script>
    <script src='fullcalendar/packages/list/main.js'></script>


    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid','googleCalendar','list'],
          

          googleCalendarApiKey: 'AIzaSyDMbmE0lLfNGZMRXAqXwnbk0VaVzqk_R2Y',
            events: {
                googleCalendarId: 'gitgood5678@gmail.com'
            }
        });

        
        calendar.render();
        
      });

      calendar.option({ aspectRatio: 1});
    </script>

</head>

  <body>

    <div id='calendar'></div>

  </body>

  </html>