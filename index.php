<!doctype html>
<html lang="en">
  <head>
    <title>Calendar App: Build</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="icon" type="image/png" href="images/icon2.png" sizes="72x72">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/current_day.css">
    <link rel="stylesheet" href="css/calendar.css">
    <style media="screen">
 


    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div id="current-day-info" class="color">

   
          <h1 id="app-name-landscape" class="off-color center default-cursor">My Calendar</h1>
          <div>
              <h2 id="current-year" class="current-day-heading center default-cursor">2020</h2>
          </div>

          <div class="">
              <h1 id="current-day" class="current-day-heading center default-cursor">Thursday</h1>
              <h1 id="current-month" class="current-day-heading center default-cursor">September</h1>
              <h1 id="current-date" class="current-day-heading center default-cursor">24</h1>

              <button id="theme-landscape" type="button" name="button"  class="btn btn-success button font">Change Theme</button>

          </div>
      </div>

         <!-- Calendar Markup -->
         <div id="calendar">
                <h1 id="app-name-portrait" class="center off-color">My Calendar</h1>
                <table >
                    <thead class="color">
                        <tr>
                            <th colspan="7" class="border-color">
                                <h4 id="calendar-year">2020</h4>                  
                                <div>
                                    <i class="fas fa-caret-left icon"></i>
                                    <h3 id="calendar-month">September</h3>
                                    <i class="fas fa-caret-right icon"></i>

                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th class="weekday border-color">Sun</th>
                            <th class="weekday border-color">Mon</th>
                            <th class="weekday border-color">Tue</th>
                            <th class="weekday border-color">Wed</th>
                            <th class="weekday border-color">Thu</th>
                            <th class="weekday border-color">Fri</th>
                            <th class="weekday border-color">Sat</th>
                        </tr>
                    </thead>

                    <tbody id="table-body" class="border-color">
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td id="current-day">1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="tooltip-default">1<img src="images/note1.png"><span>This is a pretty good note.</span></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr> 
                    </tbody>
                </table>
                <button id="theme-portrait" class=" font button color">Change Portrait</button>
            </div>

            <dialog id="modal" open></dialog>






















   
   
    <script src="js/jquery.min.js"></script>   
     <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  
  </body>

</html>