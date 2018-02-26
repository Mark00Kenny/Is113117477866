<!DOCTYPE html>
<html>
    
    <head>
        <title>Select Product</title>
         <meta charset = "UTF-8">
         <link href="../stylesheet.css"
         rel="stylesheet"
          type= "text/css">
          
           <link href="../stylesheet2.css"
         rel="stylesheet"
          type= "text/css">
          
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        </script>
    
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

     <div class = "wrapper">
                <header>
                    <h1> Please select a service</h1>
                    <nav>
                        <ul>
                             <li><a href= "../homepage.html">Home</a></li>
                             <li> <a href= "../cv_page1.html">Curriculum Vitae</a></li>
                             <li> <a href="../Interests/interests.html">Interests</a></li>
                             <li> <a href ="../ebusiness/intro_to_ebus.html"> E business</a></li>
                             <li> <a href ="../Interests/cloud.html"> Cloud Services</a></li>
                        
                      </ul>
                    </nav>
                    
                </header>
                <section class = "cloud">
                    <article>
                      
                        <hgroup>
                            <h2> Please select a product.</h2>
                            
                        </hgroup>
                        <p> 
                         <form method="POST" action="Ebus2.php">
         <hr />
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <hr />
            <br/>
            
            <label for="Cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
                Cloud 9 @ $200
            </label>
            
            <hr />
            <br/>
                        
            <label for="aws">
                <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            
            <hr />
            
            <br/>
            
            <label for="Gmail">
                <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
                
                
            </label>
            <hr />
            
            <br/>
            
            
             <label for="subtotal">
                Subtotal &euro;
                <input type="text" id="subtotal" value="0.00" name="subtotal" readonly/>
            </label>
             <hr />
            <br/> 
            
            <label for="discount">
                Discount &euro;
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <hr />
            <br/> 
            
             <label for="vat">
                VAT &euro;
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            
            <hr />
            <br/> 
            
            <label for="total">
                Total &euro;
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <hr />
            <br/> 
            
            <button  type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button class ="button_1" onClick="calcSub()";"calcDisVatTotal()";>Calculate Cost</button>
        <a rule="button" class="cancel hover" href="Ebus1.php">Clear Choice</a>
        
                <hr />
           
            <br/>
            <br/>
            
                    <br/><br/><br/><br/>
                </section>
               
             <aside>
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
               
             
                <footer>
                    &copy: Howl To The Moon Cloud
                </footer>
            </div><!--.wrapper -->
            
            
            
                
                
            <?php
            //session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION ["first_name"] = $_POST ["first_name"];
            $_SESSION [ "last_name"] = $_POST ["last_name"] ;
            $_SESSION [ "email"] = $_POST ["email"];
             ?>
        
        
        
        
       
        
    </body>
</html>