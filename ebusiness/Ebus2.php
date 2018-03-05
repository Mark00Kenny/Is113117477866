<!--Sarting the session so Ebus 1 values are brought over -->

<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Enter Details</title>
        
        <!--jQuery-->
        <!--linking my javascript validator to this page -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
        <!--Bringing in my external stylesheet again -->
    <meta charset = "UTF-8">
         <link href="../stylesheet.css"
         rel="stylesheet"
          type= "text/css">
          
            <link href="../stylesheet2.css"
         rel="stylesheet"
          type= "text/css">
          
          <style>
     header {
          background-image: url("download.png");
                }
    
   hgroup{ 
       text-align:center;
   }
    
    p{ 
        text-align:center;
    }
    
</style>

   </head>

            <body>
                <!--adding the html code for my stylesheet -->
                       <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href= "../homepage.html">Home</a>
          <a href= "../cv_page1.html">Curriculum Vitae</a>
          <a href="../Interests/interests.html">Interests</a>
          <a href ="../ebusiness/intro_to_ebus.html"> E business</a>
          <a href ="../Interests/cloud.html"> Cloud Services</a>
          <a href="https://is113117477866.herokuapp.com">is1113117477866 Heroku</a>
          <a href="https://github.com/Mark00Kenny/Is113117477866/graphs/commit-activity">GitHub </a>
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
            
             <div class = "wrapper">
                <header>
                    <h1> Payment</h1>
                    <nav>
                        <ul>
                              <li><a href= "intro_to_ebus.html">Home/About us</a></li>
                             <li> <a href= "../Interests/cloud.html">Products</a></li>
                             <li> <a href="../Interests/cloud2.html">Top Sellers</a></li>
                             <li> <a href ="Ebus1.php"> Shop</a></li>
                             <li> <a href ="../Interests/cloud3.html"> More Cloud Services</a></li>
                      </ul>
                    </nav>
                    
                </header>
                <section class = "cloud">
                    <article>
                      
                      <!--allowing values to 
                      post between ebus 2 and 3-->
                        <hgroup>
                            <h2> Please enter your payment details.</h2>
                            
                        </hgroup>
                        <p> 
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
 
             <input type="email" name="email" placeholder="E-mail" > <br>
 
                 <hr />
 
                
 
 
 
                 <br/>
               
                <button type="Submit" id="btnPurchase" disabled> Proceed with Purchase </button>
                <hr />
                
            </form>
            <br />
            <button class="success hover" onClick="validateDetails()">Validate</button>
        
                <hr />
           
            <br/>
            <br/>
            
                    <br/><br/><br/><br/><br/><br/><br/>
                </section>
                 <aside>
                     <!--adding in more photos to match with ebus 1's 
                     products on offer-->
                    <section class= "cloud_image">
                       <br/>
                       <hr />
                        <img src= "salesforce_ebus.png">
                        <hr />
                        <img width="199" height="140" src= "c9ebus.png">
                        <hr />
                        <img width="199" height="140" src= "awsebus.png">
                        <hr />
                        <img width="199" height="140"src= "gmailebus.png">
                        <hr />
                        </section>
                        

                    
                </aside>
               
                 
               <br/><br/><br/><br/><br/><br/><br/><br/>
             
               
               
                <footer>
                    &copy: Howl To The Clouds
                </footer>
            </div><!--.wrapper -->
            
            
            
                
                <!--Posting more session variables to ebus 3 -->
            <?php
            //session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION ["first_name"] = $_POST ["first_name"];
            $_SESSION [ "last_name"] = $_POST ["last_name"] ;
            $_SESSION [ "email"] = $_POST ["email"];
             ?>
            </body>
            </html>
