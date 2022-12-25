function donateMoney() {                                 
    var email = document.forms["myForm"]["email"].value;   
    var number = document.forms["myForm"]["number"].value;
    var money = document.forms["myForm"]["money"].value; 

    var emailRegex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var numberRegex =/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{5,6}$/im;
    var moneyRegex =/^[1-9][0-9]{2,}$/;


    if(!(emailRegex.test(email))) {
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
       return false;
       }
    else{
        document.getElementById('erroremail').innerHTML=""; 
    }

    if(!(numberRegex.test(number))) {
        document.getElementById('errornumber').innerHTML="Please enter a valid phone number"; 
       return false;
       }
    else{
        document.getElementById('errornumber').innerHTML=""; 
    }

    if(!(moneyRegex.test(money))) {
        document.getElementById('errortext').innerHTML="Please enter a valid amount of money"; 
       return false;
       }
    else{
        document.getElementById('errortext').innerHTML=""; 
    }
    
    }