<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        </head>
        <body>
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