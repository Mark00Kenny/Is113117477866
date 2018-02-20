<!DOCTYPE html>
<html>
    
    <head>
        <title>Select Product</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        </script>
        
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
  <a href= "homepage.html">Home</a>
  <a href= "cv_page1.html">Curriculum Vitae</a>
  <a href="Interests/interests.html">Interests</a>
  <a href ="ebusiness/Ebus1.php"> E business</a>
  <a href ="cloud.html"> Cloud Services</a>
  <a href="is113117477866.herokuapp.com">is1113117477866 Heroku</a>
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

        <h4>Select a product</h4>
        
        </br>
        
        <form method="POST" action="Ebus2.php">
           <hr />
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <hr />
            
            <label for="aws">
                <input type="radio" id="cloudnine" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <hr />
            
            <label for="amazon">
                <input type="radio" id="amazon" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            
            <hr />
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <hr />
            <br/>
            <br/>
            
            <label for="subtotal">
                Subtotal
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Subtotal
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a rule="button" href="Ebus1.php">Clear Choice</a>
        
        
    </body>
</html>