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
        .button{
	        position: absolute;
            top: 25%;
            left: 25%;
            width: 20%;
            color: white;
            font-size: 25px;
            font-weight: bold;
            height: 16%;
            background: rgba(255, 0, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(200,50,0,0.5), inset 0 0 8px 2px rgba(200,50,0,0.5);
        } 
        .button:hover {
            background: rgba(255, 0, 0, 0.8);
            box-shadow: 0 0 8px 2px rgba(255,0,0,1.0), inset 0 0 8px 2px rgba(255,0,0,1.0);
        }
        .button1 {
        	position: absolute;
            top: 25%;
            right: 25%;
            width: 20%;
            height: 16%;
            color: white;
            font-size: 25px;
            font-weight: bold;
            background: rgba(100, 0, 255, 0.3);
            box-shadow: 0 0 8px 2px rgba(100,0,255,0.5), inset 0 0 8px 2px rgba(100,0,255,0.5);
        }
        .button1:hover {
	        background: rgba(100, 0, 255, 0.8);
            box-shadow: 0 0 8px 2px rgba(100,0,255,1.0), inset 0 0 8px 2px rgba(100,0,255,1.0);
        }
        .button3{
	        position: absolute;
            top: 45%;
            left: 25%;
            width: 20%;
            color: white;
            font-size: 25px;
            font-weight: bold;
            height: 16%;
            background: rgba(50, 255, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(50,255,0,0.5), inset 0 0 8px 2px rgba(50,255,0,0.5);
        } 
        .button3:hover {
            background: rgba(50, 255, 0, 0.8);
            box-shadow: 0 0 8px 2px rgba(50,255,0,1.0), inset 0 0 8px 2px rgba(50,255,0,1.0);
        }
        .button2 {
        	position: absolute;
            top: 45%;
            right: 25%;
            width: 20%;
            height: 16%;
            color: white;
            font-size: 25px;
            font-weight: bold;
            background: rgba(0, 100, 255, 0.3);
            box-shadow: 0 0 8px 2px rgba(0,100,255,0.5), inset 0 0 8px 2px rgba(0,100,255,0.5);
        }
        .button2:hover {
	        background: rgba(0, 100, 255, 0.8);
            box-shadow: 0 0 8px 2px rgba(0,100,255,1.0), inset 0 0 8px 2px rgba(0,100,255,1.0);
        }
 .box1{
        
            position: absolute;
            bottom: 0;
            left: 0;
            width: 20%;
            height: 25%;
            background: rgba(255, 0, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,0,0,0.5), inset 0 0 8px 2px rgba(255,0,0,0.5);
            
        
        }
        .box2{
    
            position: absolute;
            bottom: 14%;
            left: 12%;
            width: 15%;
            height: 18%;
            background: rgba(0, 255, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.5), inset 0 0 8px 2px rgba(0,255,0,0.5);
        }
        .box3{
      
            position: absolute;
            bottom: 0;
            left: 20%;
            width: 15%;
            height: 16%;
            background: rgba(0, 0, 255, 0.3);
            box-shadow: 0 0 8px 2px rgba(0,0,255,0.5), inset 0 0 8px 2px rgba(0,0,255,0.5);
            
 
        }
        .box4{
         
            position: absolute;
            bottom: 0;
            left: 33%;
            width: 6%;
            height: 22%;
            background: rgba(255, 0, 255, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,0,255,0.5), inset 0 0 8px 2px rgba(255,0,255,0.5);
            
    
        }
        .box5{
   
            position: absolute;
            bottom: 25%;
            left: 0;
            width: 18%;
            height: 15%;
            background: rgba(0, 0, 255, 0.3);
            box-shadow: 0 0 8px 2px rgba(0,0,255,0.5), inset 0 0 8px 2px rgba(0,0,255,0.5);
            
        }
        .box6{
            position: absolute;
            bottom: 38%;
            left: 0;
            width: 15%;
            height: 15%;
            background: rgba(255, 0, 255, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,0,255,0.5), inset 0 0 8px 2px rgba(255,0,255,0.5);

        }
        .box7{

            position: absolute;
            bottom: 0;
            left: 0;
            width: 20%;
            height: 16%;
            background: rgba(255, 150, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,150,0,0.5), inset 0 0 8px 2px rgba(255,150,0,0.5);
 
        }
        /*.box8{*/
        /*    opacity: .3;*/
        /*    position: absolute;*/
        /*    bottom: 45%;*/
        /*    right: 0;*/
        /*    width: 20%;*/
        /*    height: 6%;*/
        /*    background: black;*/
 
        /*}*/
        /*.box9{*/
        /*    opacity: .3;*/
        /*    position: absolute;*/
        /*    bottom: 49%;*/
        /*    right: 0;*/
        /*    width: 25%;*/
        /*    height: 4%;*/
        /*    background: white;*/
 
        /*}*/
        /*.box10{*/
        /*    opacity: .3;*/
        /*    position: absolute;*/
        /*    bottom: 45%;*/
        /*    right: 15%;*/
        /*    width: 5%;*/
        /*    height: 13%;*/
        /*    background: red;*/
 
        /*}*/
        .box11{

            position: absolute;
            bottom: 0;
            left: 50%;
            width: 15%;
            height: 7%;
            background: rgba(0, 0, 255, 0.3);
            box-shadow: 0 0 8px 2px rgba(0,0,255,0.5), inset 0 0 8px 2px rgba(0,0,255,0.5);
   
            
 
        }
        .box12{

            position: absolute;
            bottom: 0;
            left: 43%;
            width: 15%;
            height: 10%;
            background: rgba(255, 0, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,0,0,0.5), inset 0 0 8px 2px rgba(255,0,0,0.5);
        }
        .box13{

            position: absolute;
            bottom: 0;
            left: 60%;
            width: 7%;
            height: 12%;
            background: rgba(255, 140, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,140,0,0.5), inset 0 0 8px 2px rgba(255,140,0,0.5);
            
 
        }
        .box14{
            
            position: absolute;
            bottom: 0;
            left: 70;
            width: 7%;
            height: 10%;
            background: rgba(100, 255, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(100,255,0,0.5), inset 0 0 8px 2px rgba(100,255,0,0.6);
            
            
 
        }
        .box15{
            position: absolute;
            bottom: 0;
            left: 67%;
            width: 5%;
            height: 7%;
            background: rgba(255, 255, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,255,0,0.5), inset 0 0 8px 2px rgba(255,255,0,0.5);
            
 
        }
        .box16{
            position: absolute;
            bottom: 0;
            left: 38%;
            width: 10%;
            height: 15%;
            background: rgba(255, 255, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,255,0,0.5), inset 0 0 8px 2px rgba(255,255,0,0.5);
            
 
        }
        .box17{
            position: absolute;
            bottom: 0;
            right: 0;
            width: 20%;
            height: 10%;
            background: rgba(255, 255, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,255,0,0.5), inset 0 0 8px 2px rgba(255,255,0,0.5);
            
 
        }
        .box18{
            position: absolute;
            bottom: 0;
            right: 10%;
            width: 15%;
            height: 22%;
            background: rgba(100, 255, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(100,255,0,0.5), inset 0 0 8px 2px rgba(100,255,0,0.6);
            
 
        }
        .box19{
            position: absolute;
            bottom: 0;
            right: 0;
            width: 12%;
            height: 25%;
            background: rgba(0, 0, 255, 0.3);
            box-shadow: 0 0 8px 2px rgba(0,0,255,0.5), inset 0 0 8px 2px rgba(0,0,255,0.6);
            
 
        }
        .box20{
            position: absolute;
            bottom: 0;
            right: 18%;
            width: 14%;
            height: 15%;
            background: rgba(255, 0, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,0,0,0.5), inset 0 0 8px 2px rgba(255,0,0,0.6);
            
 
        }
        .box21{
            position: absolute;
            bottom: 18%;
            right: 0%;
            width: 23%;
            height: 10%;
            background: rgba(0, 255, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(0,255,0,0.5), inset 0 0 8px 2px rgba(0,255,0,0.6);
            
 
        }
        .box22{
   
            position: absolute;
            bottom: 28%;
            right: 0;
            width: 15%;
            height: 12%;
            background: rgba(255, 150, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,150,0,0.5), inset 0 0 8px 2px rgba(255,150,0,0.5);
            
        }
        .box23{
   
            position: absolute;
            bottom: 35%;
            right: 0;
            width: 10%;
            height: 15%;
            background: rgba(255, 0, 0, 0.3);
            box-shadow: 0 0 8px 2px rgba(255,0,0,0.5), inset 0 0 8px 2px rgba(255,0,0,0.5);
            
        }
        .title{
            color: white;
            font-size: 525%;
            top: 10%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            position: fixed;
            text-align: center;
            font-family: 'ZCOOL QingKe HuangYou', cursive;
            font-family: 'Orbitron', sans-serif;
}
.description{
            color: white;
            font-size: 200%;
            left: 50%;
            margin-right: -50%;
            top: 32%;
            transform: translate(-50%, -50%);
            position: fixed;
        }
        </style>
         <?php
         
  //recalls the Session variable created in CheckLogin.php to obtain the user's id number and to confirm they have logged in.
            if (isset($_SESSION['sql'])){
	    unset($_SESSION['sql']);
	}
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
    <div class= "box5"></div>
    <div class= "box6"></div>
            <div class= "box3"></div>
            <div class= "box7"></div>
            <div class= "box2"></div>
            <div class= "box20"></div>
            <div class= "box1"></div>
            <div class= "box8"></div>
            <div class= "box9"></div>
            <div class= "box10"></div>
            <div class= "box11"></div>
            <div class= "box12"></div>
            <div class= "box13"></div>
            <div class= "box14"></div>
            <div class= "box15"></div>
            <div class= "box23"></div>
            <div class= "box21"></div>
            <div class= "box16"></div>
            <div class= "box17"></div>
            <div class= "box18"></div>
            <div class= "box4"></div>
            <div class= "box19"></div>
            <div class= "box22"></div>
        <a href="https://mrticket-mrcalihan.c9users.io/Index.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
        
            <div class="title" id="quoteDisplay">
            </div>
              <button class="button" onclick = "Javascript:window.location.href = '/Pages/Profile.php';">
              View my <br> tickets
              </button>
              <button class="button1" onclick = "Javascript:window.location.href = '/Pages/TicketWindow.php';">
              Place a <br> new ticket
              </button>
              <button class="button3" onclick = "Javascript:window.location.href = '/Pages/SearchWindow.php';">
              Search <br> tickets
              </button>
              <button class="button2" onclick = "Javascript:window.location.href = '/Pages/UserAdd.php';">
              Add a <br> new user
              </button>

            <!--<button onclick="newQuote()">New Quote</button>-->
            <script type="text/javascript">
            window.onload = newQuote;
          var quotes = ['Ahoy Matey!',
                        'Hello Sunshine',
                        'Whats Kickin Little Chicken?',
                        'Greetings and Salutations',
                        'Peek-a-boo!',
                        'Hello from the Other Side',
                        'Its me again!',
                        'Howdy, Howdy, Howdy',
                        'Can I get you some hot chocolate?'];
          function newQuote() {
          var randomNumber = Math.floor(Math.random() * (quotes.length));
          document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];
          }
          </script>
    </body>
    
</html>
