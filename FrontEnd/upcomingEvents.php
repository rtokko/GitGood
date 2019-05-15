<!DOCTYPE html>

<html lang='en'>

<head>
    <meta charset='utf-8' />

    <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/list/main.css' rel='stylesheet' />

    <script src='fullcalendar/packages/core/main.js'></script>
    <script src='fullcalendar/packages/daygrid/main.js'></script>
    <script src='fullcalendar/packages/google-calendar/main.js'></script>
    <script src='fullcalendar/packages/list/main.js'></script>

    <?php 
    
    session_start();

    $value = $_SESSION['email'];
    
    ?>

    <script>

      var email = '<?php echo $value?>';

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid','googleCalendar','list'],
          

          googleCalendarApiKey: 'AIzaSyDMbmE0lLfNGZMRXAqXwnbk0VaVzqk_R2Y',
            events: {
                googleCalendarId: email
            }
        });

        calendar.render();
        
      });

    </script>

</head>

  <body>

    <a href="home.php"><input name="home" type="button" id = "home" value = "Back to Home"></a><br><br>

    <div id='calendar'></div>

  </body>

  </html>
