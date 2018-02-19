<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        </head>
        <body>
            <h4>RECEIPT</h4>
            
            <?php
            // Echo session variables that were set on previous page
            echo "Total is " . $_SESSION["total"] . ".";
            ?>
            
            <?php
            Echo "Name " . $_SESSION["first_name"] . ".";
            ?>
        </body>
    
</html>