<!DOCTYPE html>
<html>
    <head>
      <?php
       session_start();
       ?>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            Profile
        </title>
        <style>
         body, hmtl{
            width: 100%;
            font-family: 'Montserrat', sans-serif;
            background-image: url("/images/darkbackground.jpg");
            background: cover;
            overflow-x: hidden;
        }
        .instruction{
            top: 5%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: absolute;
            font-weight: bold;
            font-size: 30px;
            color: white;
        }
        #customers {
    /*font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;*/
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
        word-wrap:break-word;
}

#customers td, #customers th {
    border-bottom: 1px solid black;
    border-left: 1px solid black;
    border-right: 1px solid black;
    padding: 8px;
    text-align: center;
    text-overflow: ellipses;
    /*overflow: hidden;*/
   
}

/*rows*/
#customers tr {
    background-color: white;
}

#customers tr:hover {background-color: #ddd;

}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #076314;
    color: black;
}
.row{
   position: static;
}

.content {
    padding: 0 18px;
    cursor: pointer;
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
}
.collapsible{
    font-size: 20px;
    text-align: center;
    color: white;
    font-weight: bold;
    
}
        </style>
         <?php
         
  //recalls the Session variable created in CheckLogin.php to obtain the user's id number and to confirm they have logged in.

        	if (isset($_SESSION['user'])) {
          $user = $_SESSION['user'];
          $stat = $_SESSION['stat'];
          }	else{
          ?>
          <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Index.php'" />
          <script>
             alert('Please Login to Access Mr. Ticket');
          </script>
          <?php
          }
          ?>
          
    </head>
    <body> 
    
    <a href="https://mrticket-mrcalihan.c9users.io/Pages/Functions.php"><span class="glyphicon glyphicon-home"></span> Home</a>
    
    <div class="instruction">
        Below is a listing of all your current and previous tickets.
    </div>
    <br><br><br><br>
    <div class = "row">
        <?php
            include "Config.php";
            $status = "Submitted";
            include "PF.php";
            echo table_start($user, $status);
        ?>
    </div>
    <div class = "row">
        <?php
            $status = "Work In Progress";
            echo table_start($user, $status);
        ?>
    </div>
    <div class = "row">
        <?php
            $status = "Completed";
            echo table_start($user, $status);
        ?>
    </div>
            
    </body>
    
</html>
