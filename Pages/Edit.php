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
         <link href="https://fonts.googleapis.com/css?family=Orbitron|ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <title>
            Edit Page
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
            font-size: 50px;
            color: white;
            font-family: 'ZCOOL QingKe HuangYou', cursive;
            font-family: 'Orbitron', sans-serif;
        }
        .preview{
            text-align: left;
            color: white;
            font-size: 15px;
            left: 2%;
            top: 10%;
            position: absolute;
            border-radius: 25px;
            border: 2px solid lightblue;
            width: 96%;
            height: 20%;
            overflow-y: hidden;
            box-shadow: 0 0 8px 2px rgba(0,0,255,0.6), inset 0 0 8px 2px rgba(0,0,255,0.6);
        }
        .edit{
            text-align: left;
            color: white;
            font-size: 15px;
            left: 0px;
            top: 35%;
            position: absolute;
            border-radius: 25px;
            /*border: 2px solid lightblue;*/
            width: 100%;
            height: 50%;
            /*box-shadow: 0 0 8px 2px rgba(0,0,255,0.6), inset 0 0 8px 2px rgba(0,0,255,0.6);*/
        }
        .description{
            top: 0px;
            position: relative;
            text-align: center;
            font-weight: bold;
        }
        .fdescription{
            font-weight: bold;
            font-size: 20px;
            top: 20px;
            position: relative;
            text-align: center;
        }
        .answer{
            top: 25px;
            height: 100%;
            position: relative;
            text-align:center;
            overflow-y: scroll;
        }
        .fillable{
            top: 50px;
            font-size: 20px;
            position: relative;
            color: black;
            text-align: center;
        }
        .button{
            text-align: center;
            bottom: 0px;
            left: 50%;
            width: 25%;
            right: -50%;
            transform: translate(-50%, -50%);
            position: absolute;
            font-size: 15px;
            color: black;
        }
        .box1{
            left: 0px;
            width: 13%;
            height: 100%;
            position: absolute;
            overflow-y: scroll;
        }
        .box2{
            left: 14%;
            width: 13%;
            height: 100%;
            position: absolute;
            overflow-y: scroll;
        }
        .box3{
            left: 28%;
            width: 13%;
            height: 100%;
            position: absolute;
            overflow-y: scroll;
        }
        .box4{
            left: 42%;
            width: 13%;
            height: 100%;
            position: absolute;
            overflow-y: scroll;
        }
        .box5{
            left: 56%;
            width: 13%;
            height: 100%;
            position: absolute;
            overflow-y: scroll;
        }
        .box6{
            left: 70%;
            width: 13%;
            height: 100%;
            position: absolute;
            overflow-y: scroll;
        }
        .box7{
            left: 84%;
            width: 13%;
            height: 100%;
            position: absolute;
            overflow-y: scroll;
        }
        
        .Q1{
            top: 0%;
            width: 30%;
            height: 75%;
            left: 2%;
            /*right: -75%;*/
            /*transform: translate(-50%, -50%);*/
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.6), inset 0 0 8px 2px rgba(0,255,0,0.6);
            position: absolute;
            background: rgba(0, 255, 0, 0.5);
            border-radius: 25px;
        }
        .Q2{
            top: 0%;
            width: 30%;
            height: 75%;
            left: 35%;
            /*right: -50%;*/
            /*transform: translate(-50%, -50%);*/
            box-shadow: 0 0 8px 2px rgba(0,255,255,0.6), inset 0 0 8px 2px rgba(0,255,255,0.6);
            position: absolute;
            background: rgba(0, 255, 255, 0.5);
            border-radius: 25px;
        }
        .Q3{
            top: 0%;
            width: 30%;
            height: 75%;
            right: 2%;
            /*right: -25%;*/
            /*transform: translate(-50%, -50%);*/
            box-shadow: 0 0 8px 2px rgba(255,0,255,0.6), inset 0 0 8px 2px rgba(255,0,255,0.6);
            position: absolute;
            background: rgba(255, 0, 255, 0.5);
            border-radius: 25px;
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
      <?php 
       $woid = $_GET['wo'];
    echo "Edit Ticket #$woid";
     ?>
    </div>
    <div class="preview">
        <?php
        include "Config.php";
             $sql = "SELECT * from WORKORDER WHERE WO_ID = '$woid'";
             $result = $db->query($sql);
             $row = $result->fetch_assoc();
        ?>
        <br>
        <div class="box1">
        <div class= 'description'>
        Submitted by:<br>
        </div>
        <div class= 'answer'>
        <?php

        $sql2 = "select USER_FNAME, USER_LNAME from USER where USER_ID = ".$row['USER_ID']."";
        $result2 = $db->query($sql2);
        $row2 = $result2->fetch_assoc();
        echo $row2['USER_LNAME'].", ".$row2['USER_FNAME'];
        include "Config.php";
             $sql = "SELECT * from WORKORDER WHERE WO_ID = '$woid'";
             $result = $db->query($sql);
             $row = $result->fetch_assoc();
        ?>
        </div><br><br>
        </div>
        <div class="box2">
        <div class= 'description'>
        Building:<br>
        </div>
        <div class= 'answer'>
        <?php
        echo $row["WO_SCHOOL"];
        ?>
        </div><br><br>
        </div>
        <div class="box3">
        <div class= 'description'>
        Craft:<br>
        </div>
        <div class= 'answer'>
        <?php
        echo $row["WO_CRAFT"];
        ?>
        </div><br><br>
        </div>
        <div class="box4">
        <div class= 'description'>
        Equipment Type:<br>
        </div>
        <div class= 'answer'>
        <?php
        if($row["WO_EQUIP"] == "Laptop"){
        echo $row["WO_EQUIP"]." - ".$row['WO_SERVICETAG'];
        }else if($row["WO_EQUIP"] == "Toshiba Copier"){
        echo $row["WO_EQUIP"]." - ".$row['WO_COPYCODE'];
        }else{
        echo $row["WO_EQUIP"];
        }
        ?>
        </div><br><br>
        </div>
        <div class="box5">
        <div class= 'description'>
        Location:<br>
        </div>
        <div class= 'answer'>
        <?php
        if($row["WO_AREATYPE"] == "Classroom"){
        echo $row["WO_AREATYPE"]." - ".$row['WO_AREANUM'];
        }else{
        echo $row["WO_AREATYPE"];
        }
        ?>
        </div><br><br>
        </div>
        <div class="box6">
         <div class= 'description'>
        Description:<br>
        </div>
        <div class= 'answer'>
        <?php
        echo $row["WO_DESC"];
        ?>
        </div><br><br>
        </div>
        <div class="box7">
        <div class= 'description'>
        Current Status:<br>
        </div>
        <div class= 'answer'>
        <?php
        echo $row["WO_STATUS"];
        ?>
        </div><br><br>
        </div>
    </div>
    <?php
                echo "<form action='$thisPHP' method='POST'>";
              ?>
    <div class="edit"><br>
    <div class="Q1">
         <div class= 'fdescription'>
        Workorder Assignee:<br><br>
        </div>
        <div class= 'fillable'>
        <?php
        echo "<select name='name' required>";
        echo "<option value='' disabled selected hidden>Select an Assignee</option>";
        include "Config.php";
        $sqladmin = "select * from USER where USER_ADMIN = '1'";
        $resultadmin = $db->query($sqladmin);
        while ($rowadmin = $resultadmin->fetch_assoc()){
        echo "<option value=".$rowadmin['USER_ID'].">".$rowadmin['USER_LNAME']." , ".$rowadmin['USER_FNAME']."</option>";
        }
        echo "</select>"; 
         ?>
        </div><br><br>
    </div>
    <div class="Q2">
        <div class= 'fdescription'>
        Action Taken:<br>
        </div>
        <div class= 'fillable'>
        <textarea style='height:175px; width:90%' name='descrip' maxlength='250' ><?php echo $row['WO_ACTION'];?></textarea>
        </div><br><br>
    </div>
    <div class="Q3">
        <div class= 'fdescription'>
        Change Status:<br><br>
        </div>
        <div class= 'fillable'>
        <select name='status' required>
         <option value='' disabled selected hidden>Select a Status</option>
        <option value='Work In Progress'>Work In Progress</option> 
        <option value='Completed'>Completed</option> 
        <option value='Closed'>Closed</option>
        <option value='Duplicate Request'>Duplicate Request</option>
        </select>
        </div><br><br>
    </div>
        <button class='button'>
           Submit
       </button>
    </div>
    </form>
    <?php
    include "Config.php";
    $stat = $_POST["status"];
    $user1 = $_POST["name"];
    $number = $_GET['wo'];
    $action = $_POST["descrip"];

    if(isset($stat)){
    
    //sql statement used to update that ticket number with the filled in fields using the POST method
    
    $sqlupdate = "UPDATE WORKORDER SET WO_COMPDATE = CURRENT_TIMESTAMP, WO_ACTION = '$action', WO_STATUS = '$stat', WO_ASSIGNEE = '$user1' WHERE WO_ID = '$number'";
    if ($db->query ($sqlupdate) == TRUE){
    ?>
               <meta http-equiv="refresh" content="0; URL='https://mrticket-mrcalihan.c9users.io/Pages/SearchWindow.php'" />
            <?php
                 echo "<script>
                alert('You have successfully updated the ticket!');
                </script>";
                //   header("Location: SearchWindow.php");
     
                } else {
                 echo "<script>
                 alert('Sorry, Something went wrong. Please try again.');
                 </script>";
                }
            }
            ?>
    </body>
    
</html>
