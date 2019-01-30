<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Orbitron|ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <title>
            Login
        </title>
        <style>
        body, hmtl{
            width: 100%;
            font-family: 'Montserrat', sans-serif;
            background-image: url("images/darkbackground.jpg");
            overflow-x: hidden;
        }
        .title{
            color: white;
            font-size: 425%;
            font-family: 'ZCOOL QingKe HuangYou', cursive;
            font-family: 'Orbitron', sans-serif;
            left: 100px;
            top: 10%;
            position: fixed;
            border-bottom: 2px solid white; width: 30%;
        } 
        .description{
            padding-top: 5px;
            color: white;
            font-size: 200%;
            left: 100px;
            top: 22%;
            position: fixed;
        }
        .started{
            color: white;
            font-size: 425%;
            text-align: right;
            font-family: 'ZCOOL QingKe HuangYou', cursive;
            font-family: 'Orbitron', sans-serif;
            right: 150px;
            top: 55%;
            position: fixed;
            border-bottom: 2px solid white; width: 30%;
        }
        .instruction{
            padding-top: 5px;
            text-align: right;
            color: white;
            font-size: 200%;
            right: 150px;
            top: 67%;
            position: fixed;
        }
        .email{
            background: white;
            text-align: center;
            color: black;
            font-size: 100%;
            right: 150px;
            top: 75%;
            width: 30%;
            position: fixed;
        }
        
        .submit{
            color: black;
            background: white;
            text-align: center;
            font-size: 100%;
            right: 150px;
            top: 82%;
            width: 10%;
            position: fixed;
        }
        
        .picture{
            right: 300px;
            top: 20%;
            position: fixed;
            transition: 3s;
        }
        .picture:hover{
            right: -300px;
            
        }
        
        .box1{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 20%;
            height: 25%;
            background: red;
        
        }
        .box2{
            opacity: .3;
            position: absolute;
            bottom: 14%;
            left: 12%;
            width: 15%;
            height: 18%;
            background: orange;
            
        }
        .box3{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 20%;
            width: 15%;
            height: 16%;
            background: yellow;
 
        }
        .box4{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 33%;
            width: 6%;
            height: 22%;
            background: purple;
    
        }
        .box5{
            opacity: .3;
            position: absolute;
            bottom: 25%;
            left: 0;
            width: 30%;
            height: 15%;
            background: blue;
   
        }
        .box6{
            opacity: .3;
            position: absolute;
            bottom: 38%;
            left: 0;
            width: 15%;
            height: 15%;
            background: green;

        }
        .box7{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 20%;
            height: 16%;
            background: pink;
 
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
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 15%;
            height: 7%;
            background: orange;
 
        }
        .box12{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 43%;
            width: 15%;
            height: 10%;
            background: red;
 
        }
        .box13{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 60%;
            width: 7%;
            height: 12%;
            background: green;
 
        }
        .box14{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 70;
            width: 7%;
            height: 10%;
            background: blue;
 
        }
        .box15{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 67%;
            width: 5%;
            height: 7%;
            background: purple;
 
        }
        .box16{
            opacity: .3;
            position: absolute;
            bottom: 0;
            left: 38%;
            width: 10%;
            height: 15%;
            background: blue;
 
        }
        .sideNav a {
            position: absolute;
            top: 20%;
            font-weight: bold;
            opacity: .3;
            height: 50px;
            transition: 0.3s;
            width: 300px;
            text-align: right;
            text-decoration: none;
            font-size: 20px;
            color: black;
            border-radius: 0 5px 5px 0;
            
        }

        .sideNav a:hover {
            right: 0;
            opacity: 1;
        }
       #admin {
          top: 10%;
          right: -150px;
          background-color: #FF0101;
        }
        #admin:hover{
            right: 0;
        }
        #faq {
          top: 20%;
          right: -200px;
          background-color: #39FF14;
        }
        #faq:hover{
            right: 0;
        }
        #contact {
          top: 30%;
          right: -250px;
          background-color: #00F9FF
        }
        #contact:hover{
            right: 0;
        }
        </style>
    </head>
    <body>
            <div class="title">
                Mr. Ticket
            </div>
            <div class="description">
                Having issues that you would like fixed?<br>Then you've come to the right place!
            </div>
            <div class="started">
                Get Started
            </div>
            <div class="instruction">
                Enter your valid school email below.
            </div>
            <form action="Pages/CheckLogin.php" method="POST">
                <input class="email" type="text" name="email" size=75px placeholder="example@scslakeview-k12.com"/><br>
                <button class="submit">
                    Submit
                </button>
            </form>
            <div class="picture">
                <img style="width: 200px; height: 250px; transform: scaleX(-1);" src="/images/MrTicket.png" alt="Mr Ticket">
            </div>
            <div class= "box6"></div>
            <div class= "box5"></div>
            <div class= "box3"></div>
            <div class= "box7"></div>
            <div class= "box2"></div>
            <div class= "box1"></div>
            <div class= "box8"></div>
            <div class= "box9"></div>
            <div class= "box10"></div>
            <div class= "box11"></div>
            <div class= "box12"></div>
            <div class= "box13"></div>
            <div class= "box14"></div>
            <div class= "box15"></div>
            <div class= "box16"></div>
            <div class= "box4"></div>
            <div class="sideNav">
              <a href="https://mrticket-mrcalihan.c9users.io/AdminLogin.php" id="admin"><span class="glyphicon glyphicon-log-in" style="left: 0"></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Admin Login</a>            
              <a href="#" id="faq"><span class="glyphicon glyphicon-question-sign" style="left: 0"></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;FAQ's</a>
              <a href="#" id="contact"><span class="glyphicon glyphicon-phone-alt" style="left: 0"></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Contact Us</a>
            </div>
    </body>
</html>
