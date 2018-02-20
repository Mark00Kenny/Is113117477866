

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            <hr />
            
            <form method = "POST" action = "Ebus3.php">
                
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
                
                <input type="text" name="first_name" placeholder="First name" maxlength="15"> <br>
                <input type="text" name="last_name" placeholder="Last name" maxlength="15"> <br>
                 
                 <hr />
                 
                 <label for "email">
                     E-mail Address:
                 </label>
                 
                 <br/>
                 
                 <input type="text" name="email" placeholder="E-mail" maxlength="30"> <br>
                 
                 <hr />
                 
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br/>
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        // Set session variables
        $_SESSION["total"]        = $_POST["total"];
        $_SESSION ["first_name"]  = $_POST ["first_name"];
        $_SESSION [ "last_name"]  = $_POST ["last_name"] ;
        $_SESSION [ "email"]      = $_POST ["email"];
        ?>
        
    </body>
    
    
    
</html>