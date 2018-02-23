<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <Title>Select Product</Title>
        <!--jQuery-->
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>        
        
    </head>
    <style>
    
    body
        
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
span {
    background-color: white;
    border: solid black;
}
    </style>
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

        
    <body>

        <h4>Select a Product</h4>
        
        <form method = "POST" action = "ebus2.php">
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
            <br/>
            <label for="subtotal">
                Sub Total: 
                <br/>
                    <input type="text" id="subtotal" value="0.00" class="inline" readonly/>
            </label>
            
            <br/><br/>
            
            <label for="discount">
                Discount:
                <br/>
                <input type="text" id="discount" name="total" value="0.00" class="inline" readonly/>
            </label>
            <br/><br/>
            <label for="vat">
                VAT:
                <br/>
                <input type="text" id="vat" name="vat" value="0.00" class="inline" readonly/>
            </label>
            <br/><br/>
            
            <label for="total">
            Total:
            <br/>
                <input type="text" id="total" name="total" value="0.00" class="inline" readonly/>
            </label>
            <br/>
            <a href="Ebus2.php"
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </a>
        </form>
        
        <br/>
        
        <button onClick="calcSub()" class="Calculate button1">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        <br/><br/><br/><br/>
       
       <?php
       // Set the session variables
     $_SESSION["total"] = $_POST["total"];
     ?>
    </body>
</html>