function donatePlants() {                                 

    var email = document.forms["myForm"]["email"].value;   
    var number = document.forms["myForm"]["number"].value;

    var emailRegex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var numberRegex =/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{5,6}$/im;


    if(!(emailRegex.test(email))) {
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
       return false;
       }
    else{
        document.getElementById('erroremail').innerHTML=""; 
    }

    if(!(numberRegex.test(number))) {
        document.getElementById('errornumber').innerHTML="Please enter a valid phone number..."; 
       return false;
       }
    else{
        document.getElementById('errornumber').innerHTML=""; 
    }
    }