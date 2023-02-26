function validateFormRegister(){
    var password = document.forms["myForm"]["password"].value;
    var email = document.forms["myForm"]["email"].value;    
    
    var emailRegex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var passwordRegex=/^[A-Z]{1}[a-zA-Z0-9!@#\$%\^\&*\)\(+=._-]{6}$/;


    if(!(emailRegex.test(email))) {
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
       return false;
       }
    else{
        document.getElementById('erroremail').innerHTML=""; 
    }

       if(!(passwordRegex.test(password))){
        document.getElementById('errorpassword').innerHTML="Please enter a valid password";
        return false;
       }
    //    else{
    //     document.getElementById('errorpassword').innerHTML="";
    //     alert("You've logged in successfully, you can Donate now! Thank you!");  
    //    }
}