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
    <style media="screen">

            .popup 
            {
                position: static;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 48vw;
                margin: 22vh auto 0;
                background-color: #FEFDFD;
                border-radius: 10px;

            }

            #fav-colour h4
            {
                margin: 32px 0 18px;
                font-size: calc(12px + 1.6vw);
                font-weight: 300;
                padding: 0 2vw 2px;
                border-bottom: 1px solid #222;
          

            }

            #fav-colour #colour-options
            {
                width: 84%;
                margin: 0 10px;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                font-size: 100px;
            }

            #fav-colour #colour-options h5
            {
                display: inline;  
                margin: 8px 0 12px;
                font-size: calc(6px + 0.6vw);
                font-weight: 500;
            }

            #fav-colour #colour-options .colour-option 
            {
                margin: 0.4vw;
                width: 5vw;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            #fav-colour #colour-options .colour-preview 
            {
                width: calc(16px + 1.7vw);
                height: calc(16px + 1.7vw);
                padding: 0;
                border-radius: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            


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

            <!--Modal-->

            <dialog id="modal" open>
                <div id="fav-colour">
                    <div class="popup">
                        <h4>What's your favorite color?</h4>
                        <div id="colour-options">
                            <div class="colour-option">
                                <div class="colour-preview" id="blue" style="background-color: #1B19CD;"></div>
                                <h5>Blue</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="red" style="background-color: #D01212;"></div>
                                <h5>Red</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="purple" style="background-color: #721D89;"></div>
                                <h5>Purple</h5>
                            </div>

                         
                            <div class="colour-option">
                                <div class="colour-preview" id="green" style="background-color: #158348;"></div>
                                <h5>Green</h5>
                            </div>   

                            <div class="colour-option">
                                <div class="colour-preview" id="orange" style="background-color: #EE742D;"></div>
                                <h5>Orange</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="deep-orange" style="background-color: #F13C26;"></div>
                                <h5>Deep Orange</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="baby-blue" style="background-color: #31B2FC;"></div>
                                <h5>Baby Blue</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="cerise" style="background-color: #D01212;"></div>
                                <h5>Cerise</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="lime" style="background-color: #36C945;"></div>
                                <h5>Lime</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="teal" style="background-color: #2FCCB9;"></div>
                                <h5>Teal</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="pink" style="background-color: #F5607A;"></div>
                                <h5>Pink</h5>
                            </div>

                            <div class="colour-option">
                                <div class="colour-preview" id="black" style="background-color: #212524;"></div>
                                <h5>Black</h5>
                            </div>
                        </div>
                    <button id="update-theme-button" class="button font btn btn-info">Update</button>

                    </div>
                </div>
            </dialog>
   
   
    <script src="js/jquery.min.js"></script>   
     <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  
  </body>

</html>