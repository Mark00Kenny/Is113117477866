<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
    <meta charset = "UTF-8">
         <link href="../stylesheet.css"
         rel="stylesheet"
          type= "text/css">
   </head>

            <body>
                
                       <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href= "../homepage.html">Home</a>
          <a href= "../cv_page1.html">Curriculum Vitae</a>
          <a href="../Interests/interests.html">Interests</a>
          <a href ="../ebusiness/intro_to_ebus.html"> E business</a>
          <a href ="../Interests/cloud.html"> Cloud Services</a>
          <a href="../https://is113117477866.herokuapp.com">is1113117477866 Heroku</a>
          <a href="../https://github.com/Mark00Kenny/Is113117477866/graphs/commit-activity">GitHub </a>
        </div>
        
        
        
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; .</span>
        
        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        </script>
            </head>
            
            <body>
                <h4>Please enter your payment details.</h4>
                
                    <form action="Ebus3.php" method="POST">
                        
                        <label for="user_pin">
         PIN:
         </label>
         
         <br/>
         
         <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
         <hr />
         
         <label for="user_name">
         Name:
         </label>
         
         <br/>
         
         <input type="text" id="first_name" name="first_name" placeholder="First name" maxlength="15"> <br>
         <input type="text" name="last_name" placeholder="Last name" maxlength="15"> <br>
         
         <hr />
         
         <label for "email">
         E-mail Address:
         </label>
 
                <br/>
 
             <input type="text" name="email" placeholder="E-mail" maxlength="30"> <br>
 
                 <hr />
 
                
 
 
 
                 <br/>
               
                <button type="Submit" id="btnPurchase" disabled> Proceed with Purchase </button>
                
            </form>
            <br />
            <button class="success hover" onClick="validateDetails()">Validate</button>
        
            <?php
            //session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION ["first_name"] = $_POST ["first_name"];
            $_SESSION [ "last_name"] = $_POST ["last_name"] ;
            $_SESSION [ "email"] = $_POST ["email"];
             ?>
            </body>
            </html>
