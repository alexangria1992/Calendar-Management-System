<?php
    $connection = mysqli_connect("localhost", "root", "", "calendar_app_build");
    // if(!$connection)
    // {
    //     die("There was an error connecting to the database");
    // }
    // else 
    // {
    //     echo "success";
    // }

    function db_updatetheme($newTheme)
    {
        global $connection;
        $query = "UPDATE theme SET  cur_theme = '$newTheme' WHERE id = 1";
        $result = mysqli_query($connection, $query);
        if(!$result)
        {
            die("Query failed: " . mysqli_error($connection));
        }
    }

    if(isset($_POST['color']))
    {
        db_updatetheme($_POST['color']);
    }
?>



















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
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/portrait.css">
    <link rel="stylesheet" href="css/calendar_borders.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div id="current-day-info" class="color">

   
          <h1 id="app-name-landscape" class="off-color center default-cursor">My Calendar</h1>
          <div>
              <h2 id="current-year" class="current-day-heading center default-cursor">2019</h2>
          </div>

          <div class="">
              <h1 id="current-day" class="current-day-heading center default-cursor">Thursday</h1>
              <h1 id="current-month" class="current-day-heading center default-cursor">September</h1>
              <h1 id="current-date" class="current-day-heading center default-cursor">24</h1>

              <button id="theme-landscape" type="button" name="button" onclick="openmodal(1)"  class="btn btn-success button font">Change Theme</button>

          </div>
      </div>

         <!-- Calendar Markup -->
         <div id="calendar">
                <h1 id="app-name-portrait" class="center off-color">My Calendar</h1>
                <table >
                    <thead class="color">
                        <tr>
                            <th colspan="7" class="border-color">
                                <h4 id="calendar-year">2019</h4>                  
                                <div>
                                    <i class="fas fa-caret-left icon" onclick="previousMonth()"></i>
                                    <h3 id="calendar-month"></h3>
                                    <i class="fas fa-caret-right icon" onclick="nextMonth()"></i>

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
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                        </tr>
                        <tr>
                           <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                        </tr>
                        <tr>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                        </tr>
                        <tr>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                        </tr>
                        <tr>
                             <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                        </tr>
                        <tr>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                            <td onclick="dayClicked(this)">1</td>
                    </tbody>
                </table>
                <button id="theme-portrait" onclick="openmodal(1)" class=" font button color">Change Portrait</button>
            </div>

            <!--Modal-->

            <dialog id="modal" closed >
                <div id="fav-colour" hidden  >
                    <div class="popup">
                        <h4>What's your favorite color?</h4>
                        <div id="colour-options">
                            <div class="colour-option">
                                <div class="colour-preview" id="blue" style="background-color: #1B19CD;" onclick="updateColorData('blue')"><i class="fas fa-check checkmark"></i></div>
                                <h5>Blue</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="red" style="background-color: #D01212; " onclick="updateColorData('red')"></div>
                                <h5>Red</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="purple" style="background-color: #721D89;" onclick="updateColorData('purple')"></div>
                                <h5>Purple</h5>
                            </div>

                         
                            <div class="colour-option">
                                <div class="colour-preview" id="green" style="background-color: #158348;" onclick="updateColorData('green')"></div>
                                <h5>Green</h5>
                            </div>   

                            <div class="colour-option">
                                <div class="colour-preview" id="orange" style="background-color: #EE742D;" onclick="updateColorData('orange')"></div>
                                <h5>Orange</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="deep-orange" style="background-color: #F13C26;" onclick="updateColorData('deep-orange')"></div>
                                <h5>Deep Orange</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="baby-blue" style="background-color: #31B2FC;" onclick="updateColorData('baby-blue')"></div>
                                <h5>Baby Blue</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="cerise" style="background-color: #EA3D69;" onclick="updateColorData('cerise')"></div>
                                <h5>Cerise</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="lime" style="background-color: #36C945;" onclick="updateColorData('lime')"></div>
                                <h5>Lime</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="teal" style="background-color: #2FCCB9;" onclick="updateColorData('teal')"></div>
                                <h5>Teal</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="pink" style="background-color: #F5607A;" onclick="updateColorData('pink')"></div>
                                <h5>Pink</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="black" style="background-color: #212524;" onclick="updateColorData('black')"></div>
                                <h5>Black</h5>
                            </div>
                        </div>
                    <button id="update-theme-button" class="button font btn btn-danger" onclick="updateColorClicked()">Update</button>

                    </div>
                </div>

                <!--Note--> 
                <div id="make-note" hidden >
                    <div class="popup">
                        <h4>Add a note to the calendar</h4>
                        <textarea name="edit-post-it" id="edit-post-it" class="font"></textarea>
                        <div>
                            <button class="button font post-it-button btn btn-success" id="add-post-it" onclick="submitPostIt()">Post It</button>
                            <button class="button font post-it-button btn btn-danger" id="delete-button" onclick="deleteNote()">Delete It</button>
                        </div>
                    </div>
                </div>
            </dialog>

            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>

            <script type="text/javascript" src="js/main.js"></script>
            <script type="text/javascript" src="js/ajax.js"></script>
            <script type="text/javascript" src="js/data.js"></script>
            <script type="text/javascript" src="js/date.js"></script>
            <script type="text/javascript" src="js/building_calendar.js"></script>
            <script type="text/javascript" src="js/modal.js"></script>
            <script type="text/javascript" src="js/making_notes.js"></script>
            <script type="text/javascript" src="js/updating_color.js"></script>





               <script type="text/javascript" src="js/start.js"></script>



            
   
    
  
  </body>

</html>