<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
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
  <a href= "cv_page1.html">Curriculum Vitae</a>
  <a href="Interests/interests.html">Interests</a>
  <a href ="ebusiness/Ebus1.php"> E business</a>
  <a href ="Interests/cloud.html"> Cloud Services</a>
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

            <h2>Purchase Receipt</h2>
            
            <?php
            // Echo session variables that were set on previous page
            echo "Total is " . $_POST["total"] . ".";
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
            
        </body>
    
</html>