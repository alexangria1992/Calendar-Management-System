<!doctype html>
<html lang="en">
  <head>
    <title>Calendar App: Build</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style media="screen">
        body {
            font-family: 'Josefin Sans', sans-serif !important;
            margin: 0;
            background-color: #FEFDFD;
            display: flex;
            align-items: stretch;

        }

        .font {
            font-family: 'Josefin Sans', sans-serif !important; 
            font-weight: bold !important;

        }

        .default-cursor{
            cursor: default ;
        }

        .center {
            text-align: center;
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





























  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>   
     <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </script>
  
  </body>

</html>