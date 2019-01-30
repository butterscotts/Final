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
	background-color:#8B0000;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	/*border:1px solid #000000;*/
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #457585;
	 font-size: 25px;
          right: 32%;
          top: 50%;
          position: fixed;
           width: 15%;
          height: 20%;
                } 

.button:hover {
	background-color:#800000;
}
        .button2{
	background-color:#8B0000;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	/*border:1px solid #000000;*/
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #457585;
	 font-size: 25px;
          left: 10%;
          top: 50%;
          position: fixed;
           width: 15%;
          height: 20%;
                } 

.button2:hover {
	background-color:#800000;
}
        .button3{
	background-color:#8B0000;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	/*border:1px solid #000000;*/
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #457585;
	 font-size: 25px;
          right: 10%;
          top: 50%;
          position: fixed;
           width: 15%;
          height: 20%;
                } 

.button3:hover {
	background-color:#800000;
}

.button1 {
	background-color:#8B0000;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	/*border:1px solid #000000;*/
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #457585;
		 font-size: 25px;
          left: 32%;
          top: 50%;
          position: fixed;
          width: 15%;
          height: 20%;
}
.button1:hover {
	background-color:#800000;
}

        .title{
            color: white;
            font-size: 525%;
            top: 20%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            position: fixed;
            text-align: center;
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
    
        <a href="https://mrticket-mrcalihan.c9users.io/Index.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
        
            <div class="title" id="quoteDisplay">
            </div>
              <button class="button" onclick = "Javascript:window.location.href = '/Pages/Profile.php';">
              View my <br> tickets
              </button>
              <button class="button1" onclick = "Javascript:window.location.href = '/Pages/TicketWindow.php';">
              Place a <br> new ticket
              </button>
              <button class="button2" onclick = "Javascript:window.location.href = '/Pages/SearchWindow.php';">
              Search <br> tickets
              </button>
              <button class="button3" onclick = "Javascript:window.location.href = '/Pages/UserAdd.php';">
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
