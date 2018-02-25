<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
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
        <H3 style="text-align:center;">Thank you for your purchase.</H3>
        <div class="receipt">
            <?php
            // echo session variables from ebus2
            echo "Total is &euro; " . $_SESSION["total"] . ".";
            ?>
            
            <br/>
            <br/>
            
            <?php
            echo "Name: " . $_POST["first_name"] . " ";
            ?>
            
            
            <?php
            echo " " . $_POST["last_name"] . ".";
            ?>
            
            <br/>
            <br/>

            <?php
            echo "E-mail Address: " . $_POST["email"] . ".";
            ?>            
            
            <br/>
            <br/>
            
             <a href= "../homepage.html">Home</a>
            
        
        </div> 
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <footer>
            <p>117477866 &copy; 2018</p>
        </footer>
    </body>
</html>   