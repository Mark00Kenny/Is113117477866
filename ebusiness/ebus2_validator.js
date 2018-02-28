/* global $ */
//This is my Javascript file which
// prevents users from moving on until they submit all
// relevant information needed to make a purchase.


function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
}

    var email;
    
    email = document.getElementById("email").value;
    
    if (email==""){
        alert("Please enter your email");
        }
    
    else if (String(email).length<20){
        alert("Please make sure your email is accurate");
        }
        
    else{
        enablebtnPurchase();
        }
        
        var name1;
    
    name1 = document.getElementById("first_name").value;
    
    if (name1==""){
        alert("Please enter your Name");
        }
        
        else if (String(name1).length<20){
        alert("Please make sure your name is accurate");
        }
    
    else{
        enablebtnPurchase();
        }
        
        var name2;
    
    name2 = document.getElementById("last_name").value;
    
    if (name2==""){
        alert("Please enter your Name");
        }
        
        else if (String(name2).length<20){
        alert("Please make sure your name is accurate");
        }
    
    else{
        enablebtnPurchase();
        }



function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
