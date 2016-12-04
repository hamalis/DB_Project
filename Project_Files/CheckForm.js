/* 
 * Salman Alhamali
 * Web Technologies
 * Lab 3 - March 13 2016 
 */


//This function is to check the form before submit the information 

function checkform() {

    var errormessage = "";
    var errormessage1 = "";
    var errormessage2 = "";
    var credit = document.getElementById('credit').value; 
    var passd = document.getElementById('passd').value; 
    var email = document.getElementById('email').value;
    var elength = email.length;
    var atpos = email.indexOf('@');
    var atdot = email.lastIndexOf('.com');


    if (credit === "") //to check if the field is empty 
    {
        errormessage += "<font color= #ff0000>*Card number is required </font>";
        document.getElementById("credit_error").innerHTML = errormessage;
       
    }
   
     else if (credit.length < 16 ) //if not empty then it will check if less than 16 digits
    {

        errormessage += "<font color=#ff0000>*16 digits required</font>";
        document.getElementById("credit_error").innerHTML = errormessage;

    }
     else if (credit.search(/^\d{16}$/) )//if not emoty and all 16 credit card was filled then it will check for charctres 
    {
        errormessage += "<font color=#ff0000>*only numbers for card </font>";
        document.getElementById("credit_error").innerHTML = errormessage;

    }
     
    else //to give green light (every thing is ok) 
    {
        document.getElementById('credit').style.borderColor = "";
        document.getElementById('credit').blur();
        //document.getElementById("credit_error").innerHTML = "<font color = #009900>&#10004</font>";
        errormessage = ""; 
     }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if (email === "")//to check if emaiil field is empty
    {
        errormessage1 += "<font color=#ff0000>*Email is required </font>";
        document.getElementById("email_error").innerHTML = errormessage1;


    } 
    
     else if (atpos < 1 || atdot < 1) //if fiels is not empty then it will check fro @ sign and dot sing
    {
        errormessage1 += "<font color=#ff0000>*E-mail is not valid </font>";
        document.getElementById("email_error").innerHTML = errormessage1;
 
    } 
    else if (atpos > atdot ) //also check if dot come before @ sign 
    {
        errormessage1 += "<font color=#ff0000>*E-mail is not valid </font>";
        document.getElementById("email_error").innerHTML = errormessage1;
    }

    
    else //to give green light (every thing is ok) 
     {
        document.getElementById('email').style.borderColor = "";
        document.getElementById('email').blur();
        //document.getElementById("email_error").innerHTML = "<font color = #009900>&#10004</font>";
        errormessage1 = ""; 
        
     }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    if (passd === "") //to check if passwrod field is empty
    {
        errormessage2 += "<font color=#ff0000>*Password is required </font>";
        document.getElementById("password_error").innerHTML = errormessage2;
 
    }
    else if (passd.length < 6)//to check if password is less than six 
    {
        errormessage2 += "<font color=#ff0000>*Password is too short </font>";
        document.getElementById("password_error").innerHTML = errormessage2;
     
    } 
    else if(!checkPassword(document.getElementById('passd').value)) //if password is not valid (does not contain upper case, lower case, or number)  
    {
        errormessage2 += "<font color=#ff0000>*Password is not valid </font>";
        errormessage2 += "<font color=#ff0000>*missing upper/lower case or number </font>";
        document.getElementById("password_error").innerHTML = errormessage2;
     }
     else //to give green light (every thing is ok) 
     {
        document.getElementById('passd').style.borderColor = "";
        document.getElementById('passd').blur();
        //document.getElementById("password_error").innerHTML = "<font color = #009900>&#10004</font>";
        errormessage2 = ""; 
     }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    //to show the error message inside the form 
    if (errormessage !== "" ) //credit card eror meesage field
    {
        document.getElementById("credit_error").innerHTML = errormessage;
               document.getElementById('credit').focus();
                return false;
           }  
           
    if (errormessage1 !== "" ) //email card eror meesage field
        {
            document.getElementById('email').focus();
        document.getElementById("email_error").innerHTML = errormessage1;
               return false;
          }
          
        if (errormessage2 !== "" ) //password card eror meesage field
        {
         document.getElementById('passd').focus();
        document.getElementById("password_error").innerHTML = errormessage2;
            return false;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        if (errormessage === "" && errormessage1 === "" && errormessage2 === "") //if all informations are correct then it will show the submit message 
    {
        //alert("Great, information submitted successfully !!"); // submit message 
                //to reset all fields after submition all information 
                          $.get("signup.php");
                          
                //document.getElementById("credit").value = ""; 
                  //  document.getElementById("email").value = "";
                     //   document.getElementById("passd").value = "";
        
        //to rest all error messages 
        document.getElementById("credit_error").innerHTML = "";
        document.getElementById("email_error").innerHTML = "";
        document.getElementById("password_error").innerHTML = "";
        return true; 
     }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        function checkPassword(str) //this function is to check if password is valid (conatins at least one number and upper case character
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }

 
}
