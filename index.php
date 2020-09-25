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
    <style media="screen">
        body {
            font-family: 'Chivo', sans-serif !important;     
                   margin: 0;
            background-color: #FEFDFD;
            display: flex;
            align-items: stretch;

        }

        table, td, th{
            border: 1px solid #232323;

        }

        table 
        {
           margin: 14px auto; 
           padding: 7vh 0;
        }

        .font {
            font-family: 'Chivo', sans-serif !important;
            font-weight: bold !important;

        }

        .default-cursor{
            cursor: default ;
        }

        .center {
            text-align: center !important ;
        }

        .button{
            border-radius: 500px !important;
            margin: 0 auto !important;
          
        }

        .color{
            color: #FEFDFD;
            background-color: #1B19CD;
        }

        .border-color{
            border-color: #1B19CD;
        }

        .off-color{
            color: #7C7EFB;
        }


        .tooltip-default span 
        {
            display: none;
        }

        .tooltip-default:hover 
        {
            cursor: help;
            position: relative;
            
        }

        .tooltip-default:hover span 
        {
            display: block;
            font-size: 1vw;
            padding: 6px;
            white-space: pre-wrap;
            width: 12vw;
            z-index: 100;
            background-color: #EDEDED;
            color: black;
            border-radius: 6px;
            left: 2vw;
            top: 4vw;
            position: absolute;
        }


        /*current day info styles*/

        #current-day-info{
            width: 34%;
            min-height: 100vh;
        }

        #current-day-info #app-name-landscape{
          font-size: 6.2vh;
          padding: 9vh 0 1vh;
          border-bottom: 1px solid;
        }

        #current-day-info h2 
        {
            font-size: 6vh;
            font-weight: 300;
            margin: 0 0 3vh;
            padding-top: 3vh;
        }

        #current-day-info h1 
        {
            font-size: 6.8vh;
            font-weight: 600;
            margin: 4vh 0;
        } 

        #current-day-info #theme-landscape
        {
            display: block;
            /* padding: 16px 38px; */
            padding: 1.8vh 4.2vh;
            background-color: #1B19CD !important;
            border: 3px solid #FEFDFD;
            font-size: 2.4vh;
        }

        #current-day-info #theme-landscape:hover 
        {
            background-color: white !important;
            opacity: 0.4;
            color: black;
        }

        #calendar{
            width: 66%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: space-around;
        }

        #calendar #app-name-portrait{
            display: none;
        }

        #calendar #theme-portrait{
            display: none;
        }

        

        #calendar h4
        {
         margin: 0;
         padding: 0.8vh 0 0.2vh;
         font-size: 1.4vw ;
         font-weight: 300 ;
         align-items: center;
         justify-content: center;
         display: flex;
         font-weight: 1;
         

        }

        #calendar h3
        {
            font-size: 3vw;
            font-weight: 700;
            margin: 0;
            padding: 0 2vw;
            display: inline-block;
        }

        #calendar  thead tr:first-child th  div {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #calendar .weekday{
           font-size: 1.9vw;
           font-weight: 300;
           padding:  8px 0 5px;
           border-bottom: 1px solid white !important;
           text-align: center;

        }

        #calendar .icon
        {
            font-size: 1.8vw;
        }

        #calendar .icon:hover 
        {
            opacity: 0.6;
        }

        #calendar tbody td 
        {
            height: 5.2vw;
            width: 5.2vw;
            font-size: 0.8vw;
            font-weight: 600;
            vertical-align: top;
            padding: 0.5vw;
            transition: font-size .4s ease;
        }

        #calendar tbody td:hover 
        {
            font-size: 1.2vw;
        }

        #calendar #current-day 
        {
            background-color: #E1E1E1;
        }

        #calendar img 
        {
            width: 3.4vw;
            vertical-align: top;
            position: relative;
            top: 0.5vw;
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




























  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>   
     <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </script>
  
  </body>

</html>