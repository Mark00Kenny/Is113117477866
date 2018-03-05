<!--Carrying over values from ebus 1 and 2 to Ebus 3 -->

<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <!--importing my stylesheets again
        for further styleing
        -->
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
        <!--html code for my stylesheet -->
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
                    <h1> Receipt</h1>
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
                      
                        <hgroup>
                            <h2> Thank you for your purchase.</h2>
                            
                        </hgroup>
                        <p> 
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
            </p>
               <p> A confirmation of your purchase shall be emailed to you shortly. </p>
                    <br/><br/><br/><br/><br/><br/><br/>
                </section>
               <br/><br/><br/><br/><br/><br/><br/><br/>
             
               
               <br/><br/><br/><br/><br/><br/><br/>
                <footer>
                    &copy: Howl To The Clouds
                </footer>
            </div><!--.wrapper -->
            
        
           
             
            
        
         
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        
    </body>
</html>   