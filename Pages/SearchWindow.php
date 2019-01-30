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
            Home
        </title>
        <style>
        body, hmtl{
            width: 100%;
            font-family: 'Montserrat', sans-serif;
            background-image: url("/images/darkbackground.jpg");
            overflow-x: hidden;
        }
        .instruction{
            top: 5%;
            font-size: 50px;
            color: white;
            text-align: center;
            font-family: 'ZCOOL QingKe HuangYou', cursive;
            font-family: 'Orbitron', sans-serif;
        }
        .or{
            top: 15%;
            font-size: 20px;
            color: white;
            font-weight: bold;
            text-align: center;
            left:10px;
        }
        .container{
            text-align: left;
            color: white;
            font-size: 15px;
            left: 10px;
            top: 15%;
            position: absolute;
            border-radius: 25px;
            border: 2px solid lightblue;
            width: 20%;
            height: 83%;
            box-shadow: 0 0 8px 2px rgba(0,0,255,0.6), inset 0 0 8px 2px rgba(0,0,255,0.6);
        }
        /*.keyword{*/
        /*    text-align: left;*/
        /*    color: white;*/
        /*    font-size: 15px;*/
        /*    color: black;*/
        /*    top: 55%;*/
        /*    position: absolute;*/
        /*    left: 50%;*/
        /*    margin-right: -50%;*/
        /*    transform: translate(-50%, -50%);*/
        /*}*/
        /*.fromDate{*/
        /*    text-align: left;*/
        /*    color: white;*/
        /*    font-size: 15px;*/
        /*    color: black;*/
        /*    top: 65%;*/
        /*    position: absolute;*/
        /*    left: 50%;*/
        /*    margin-right: -50%;*/
        /*    transform: translate(-50%, -50%);*/
        /*}*/
        /*.toDate{*/
        /*    text-align: left;*/
        /*    color: white;*/
        /*    font-size: 15px;*/
        /*    color: black;*/
        /*    top: 73%;*/
        /*    position: absolute;*/
        /*    left: 50%;*/
        /*    margin-right: -50%;*/
        /*    transform: translate(-50%, -50%);*/
        /*}*/
        .from{
            text-align: left;
            color: white;
            font-size: 15px;
            color: white;
            top: 62%;
            position: absolute;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }
        .to{
            text-align: left;
            color: white;
            font-size: 15px;
            color: white;
            top: 70%;
            position: absolute;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }
        .viewer{
            text-align: left;
            color: black;
            /*font-size: 20px;*/
            left: 23%;
            top: 15%;
            position: absolute;
            /*border-radius: 25px;*/
            border: 2px solid lightblue;
            width: 75%;
            height: 75%;
            box-shadow: 0 0 8px 2px rgba(0,0,255,0.6), inset 0 0 8px 2px rgba(0,0,255,0.6);
            overflow-y: scroll;
        }
        .pagetab{
            text-align: left;
            color: white;
            /*font-size: 20px;*/
            left: 23%;
            top: 92%;
            position: fixed;
            /*border-radius: 25px;*/
            border: 2px solid lightblue;
            width: 75%;
            height: 6%;

            box-shadow: 0 0 8px 2px rgba(0,0,255,0.6), inset 0 0 8px 2px rgba(0,0,255,0.6);
        }
        .equip, .submitter, .craft, .building, .fromDate, .toDate, .keyword{
            color: black;
            position: relative;
            left: 10px;
            
        }
        .button{
            text-align: center;
            bottom: 5%;
            left: 50%;
            width: 50%;
            right: -50%;
            transform: translate(-50%, -50%);
            position: absolute;
            font-size: 15px;
            color: black;
        }
        .description{
            left: 10px;
            position: relative;
        }
        .status{
            position: absolute;
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

#customers tr {
    background-color: white;
}

#customers tr.red:hover {
background-color: rgba(255, 0, 0, 0.2);

}
#customers tr.orange:hover {
background-color: rgba(255, 165, 0, 0.2);
}
#customers tr.green:hover {
background-color: rgba(0, 255, 0, 0.2);
}

#customers th {
    /*padding-top: 12px;*/
    /*padding-bottom: 12px;*/
    text-align: center;
    background-color: #777;
    color: black;
}
.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}
.key{
    font-size: 15px;
    color: black;
    text-align: center;
    left: 50%;
    width: 50%;
    top: 80%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    position: absolute;
}

.active, .collapsible:hover {
    background-color: #555;
}

.content {
    /*padding: 0 18px;*/
    /*max-height: 0;*/

    /*overflow: hidden;*/
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
}
.show{
    top:0px;
    left: 50px;
    border: 2px solid white;
    width: 10%;
    height: 10%;
    position:absolute;
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
    
        <a href="https://mrticket-mrcalihan.c9users.io/Pages/Admin.php"><span class="glyphicon glyphicon-home"></span> Home</a>
        <div class="instruction">
            Search Window
        </div><br>
         <?php
if (isset($_GET['var'])){
  $var = $_GET['var'];
echo '<div>'.$var.'</div>';
}
?>
<div class='container'>
    <div class="or">
    Search by Categories
</div>
<?php
                echo "<form action='$thisPHP' method='POST'>";
              ?>
    <div class= 'description'><br>
Building:<br>
</div>
<select class='building' name='building'>
<option value='' disabled selected hidden>Select a Building</option>
<option value='Ardmore'>Ardmore</option> 
<option value='Greenwood'>Greenwood</option>
<option value='Harmon'>Harmon</option>
<option value='Princeton'>Princeton</option>
<option value='Jefferson'>Jefferson</option>
<option value='HighSchool'>High School</option>
<option value='Wheat'>Wheat/Admin</option>
<option value='All'>All Buildings</option>
</select>
<br><br>
 <div class= 'description'>
Craft:<br>
</div>
<select class='craft' name='craft'>
<option value='' disabled selected hidden>Select a Craft</option> 
<option value='Technology'>Technology</option>
<option value='Grounds'>Grounds</option>
<option value='Maintenance'>Maintenance</option>
</select>
<br><br>
 <div class= 'description'>
Equipment Type:<br>
</div>
<select class='equip' name='equip' id='equip' onchange='java_script_:show(this.options[this.selectedIndex].value)'>
<option value='' disabled selected hidden>Select a Type</option> 
<option value='Desktop'>Desktop</option>
<option value='Laptop'>Laptop</option>
<option value='Toshiba Copier'>Toshiba Copier</option>
<option value='Mobile Device'>Mobile Device</option>
<option value='Other'>Other</option>
</select>
<div id='otherType' style='display:none;'>
<label for='otherType'> Specify</label>
<input type='text' name='otherType' maxlength='50' placeholder='Equipment Type'/>
<br>
</div>
<div id='ServiceTag' style='display:none;'>
<label for='ServiceTag'>Service Tag Number</label>
<input type='text' name='ServiceTag' maxlength='20'/>
<br>
</div>
<div id='CCode' style='display:none;'>
<label for='CCode'>Copier Code</label>
<input type='text' name='CCode' maxlength='6'/>
<br>
</div>
<br><br> 
 <div class= 'description'>
Submitted By:<br>
</div>
<select class='submitter' name='submitter'>
<option value='' disabled selected hidden>Select a User</option>
<?php
 include "Config.php";
  $sql = "select * from USER order by 'USER_LNAME'";
  $result = $db->query($sql);
  while ($row = $result->fetch_assoc()){
  echo "<option value=".$row['USER_ID'].">".$row['USER_LNAME']." , ".$row['USER_FNAME']."</option>";
  }
  ?>
</select>
<div class: "status"><br>
<!--Select what tickets you would like to see:<br><br>-->
<input type='checkbox' name='statusS' value='Submitted'> Submitted<br>
<input type='checkbox' name='statusW' value='Work In Progress'>    Work In Progress<br>
<input type='checkbox' name='statusC' value='Completed'>    Completed<br>
</div>
<br>
<input class="keyword" type='text' id='keyword' name='keyword' placeholder='keyword'><br><br>
    <div class= 'description'>
From:<br>
</div>
  <input class="fromDate" type="date" name="fromDate" id="fromDate"><br><br>
<div class= 'description'>
To:<br>
</div>
  <input class="toDate" type="date" name="toDate" id="toDate"><br><br>
<button type="submit" class='button' name='check' id='check' value='TRUE'>
    Search
</button>
</form>
</div>

<?php
include "Config.php";
$key = $_POST["keyword"];
$check2 = $_POST["check2"];
$check = $_POST["check"];
$bldg = $_POST["building"];
$craft = $_POST["craft"];
$user1 = $_POST["submitter"];
$statusS = $_POST["statusS"];
$statusW = $_POST["statusW"];
$statusC = $_POST["statusC"];
$fromDate = date('Y-m-d', strtotime($_POST['fromDate']));
$toDate = date('Y-m-d', strtotime($_POST['toDate']));

	if (isset($_SESSION['sql']) && ($check != TRUE)) {
	    echo "<div class='viewer'>";
	       $sql = $_SESSION['sql'];
	    include "FinderFunction.php";
	  echo table_start($sql);
	 echo "</div>";
	}

if($_POST["equip"] == "Other"){
  if($_POST["otherType"] !== ""){
  $equip = $_POST["otherType"];
  }
}else if(isset($_POST["equip"])){
  $equip = $_POST["equip"];
}
if($_POST["equip"] == "Laptop"){
  if($_POST["ServiceTag"] !== ""){
  $service = $_POST["ServiceTag"];
  }
  $equip = $_POST["equip"];
}
if($_POST["equip"] == "Toshiba Copier"){
  if($_POST["CCode"] !== ""){
  $ccode = $_POST["CCode"];
  }
  $equip = $_POST["equip"];
}
if(isset($service)){
  !isset($equip);
}
$and = '0';
$or = '0';
$sql = "FROM WORKORDER NATURAL JOIN USER WHERE ";
if(isset($bldg)){
    $sql = $sql." WO_SCHOOL = '$bldg'";
    $and = '1';
}
if(isset($craft)){
    if($and == '1'){
        $sql = $sql." AND WO_CRAFT = '$craft'";
       
    }else{
        $sql = $sql." WO_CRAFT = '$craft'";
        $and = '1';
    }
}
if(isset($equip)){
    if($and == '1'){
        $sql = $sql." AND WO_EQUIP = '$equip'";
    }else{
        $sql = $sql." WO_EQUIP = '$equip'";
        $and = '1';
    }
}
if(isset($user1)){
    if($and == '1'){
        $sql = $sql." AND USER_ID = '$user1'";
    }else{
        $sql = $sql." USER_ID = '$user1'";
        $and = '1';
    }
}
if(isset($statusS)){
    if($and == '1'){
        $sql = $sql." AND (WO_STATUS = '$statusS'";
        $or = '1';
    }else{
        $sql = $sql." (WO_STATUS = '$statusS'";
        $or = '1';
    }
}
if(isset($statusW)){
    if($and == '1' && $or == '0'){
        $sql = $sql." AND (WO_STATUS = '$statusW'";
        $or = '1';
    }elseif($or == '1'){
        $sql = $sql." OR WO_STATUS = '$statusW'";
    }else{
        $sql = $sql." (WO_STATUS = '$statusW'";
        $or = '1';
    }
}
if(isset($statusC)){
      if($and == '1' && $or == '0'){
        $sql = $sql." AND (WO_STATUS = '$statusC'";
         $or = '1';
    }
    if($or == '1'){
        $sql = $sql." OR WO_STATUS = '$statusC'";
    }else{
        $sql = $sql." (WO_STATUS = '$statusC'";
        $or = '1';
    }
}
if(isset($statusS)||isset($statusW)||isset($statusC)){
    $sql = $sql.")";
}
if(($fromDate != "1970-01-01")&&($toDate != "1970-01-01")){
    if($and == '1'){
    $sql = $sql." AND (WO_REQDATE BETWEEN '$fromDate' AND '$toDate')";
    }else{
    $sql = $sql." WO_REQDATE BETWEEN '$fromDate' AND '$toDate'";      
    }
}
if($key != NULL){
    if($and == '1'){
    $sql = $sql." AND (CONCAT(  `WO_ID` ,  '', IFNULL(`USER_ID` , 0), '', IFNULL( `ADMIN_ID` , 0 ) ,  '',  `WO_STATUS` ,  '',  `WO_REQDATE` ,  '', IFNULL( `WO_COMPDATE` , 0 ) ,  '',  `WO_AREATYPE` ,  '', IFNULL(  `WO_AREANUM` , 0 ) ,  '',  `WO_CRAFT` ,  '',  `WO_SCHOOL` ,  '', `WO_DESC` ,  '', IFNULL(  `WO_ASSIGNEE` , 0 ) ,  '', IFNULL(  `WO_ACTION` , 0 ) ,  '',  `WO_EQUIP` ,  '', IFNULL( `WO_SERVICETAG` , 0 ) ,  '', IFNULL(  `WO_COPYCODE` , 0 ) ) LIKE  '%$key%')";
    }else{
    $sql = $sql." (CONCAT(  `WO_ID` ,  '', IFNULL(`USER_ID` , 0), '', IFNULL( `ADMIN_ID` , 0 ) ,  '',  `WO_STATUS` ,  '',  `WO_REQDATE` ,  '', IFNULL( `WO_COMPDATE` , 0 ) ,  '',  `WO_AREATYPE` ,  '', IFNULL(  `WO_AREANUM` , 0 ) ,  '',  `WO_CRAFT` ,  '',  `WO_SCHOOL` ,  '', `WO_DESC` ,  '', IFNULL(  `WO_ASSIGNEE` , 0 ) ,  '', IFNULL(  `WO_ACTION` , 0 ) ,  '',  `WO_EQUIP` ,  '', IFNULL( `WO_SERVICETAG` , 0 ) ,  '', IFNULL(  `WO_COPYCODE` , 0 ) ) LIKE  '%$key%')";
    }
}

if($sql != "FROM WORKORDER NATURAL JOIN USER WHERE "){
echo "<div class='viewer'>";
include 'FinderFunction.php';
$_SESSION['sql'] = $sql;
           	echo "<script>
    window.location.href='/Pages/SearchWindow.php';
    </script>";
    echo "</div>";
}
?>
</body>
</html>
