/* global $ */
// Creating a calculation function through javascript
// in order to build a service for consumers to calculate the cost of their goods
function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    if(document.getElementById('gmail').checked) {
      argSubTotal = 400;
    }
    if(document.getElementById('aws').checked){
        argSubTotal= 300;
    }
    if(document.getElementById('cloud9').checked){
        argSubTotal= 200;
    }

    calcDisVatTotal(argSubTotal);
}

// This calcdisvattotal function
// collects parameter values and creates a discount

function calcDisVatTotal(parmSubTotal){
  var num1, num2, discount, vat, totalPrice;
  num1 = .05
  discount = parmSubTotal * num1;
  document.getElementById("discount").value = discount;
  num2 = parmSubTotal - discount;
  vat = num2 * .10;
  totalPrice = parmSubTotal-(discount) +(vat);
  display(parmSubTotal,discount,vat,totalPrice);

}
//This is the display function
// which is used to show all of the final 
// calculations from the calculation functions
function display(parm1,parm2,parm3,parm4){
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;
  enablebtnProceed();
}

    

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}