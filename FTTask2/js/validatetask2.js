function validatefrm()
{
    var letter = /^[a-z]$/;
    var fname = document.getElementById("fname").value;
    var fst = letter.test(fname);
    var lname = document.getElementById("lname").value;
    var sst = letter.test(lname);
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var pass = document.getElementById("pass").value;
    var file = document.getElementById("file").value;

    if (fname == "" || fname.lenght<5) 
    {
        document.getElementById("errorfname").innerHTML="Please enter your first name*";
        return false;
    }

    if (lname == "" || lname.lenght<5)
    {
        document.getElementById("errorlname").innerHTML = "Please enter your last name*";
        return false;
    }

    if (age == "")
    {
        document.getElementById("errorage").innerHTML = "Plase enter your age*";
        return false;
    } 

    if (document.getElementById("Designation").checked == flase)
    {
        document.getElementById("errorDeg").innerHTML="Please select any*";
        return flase;
    }
    
    if (document.getElementById("language").checked == flase)
    {
        document.getElementById("errorlanguage").innerHTML="Please select*";
        return flase;
    }  
    else
    {
        return true;
    }

    if(!res)
    {
      document.getElementById("errormail").innerHTML="Email format is not correct";
      return false; 
    }

    if (pass == "" || pass<8)
    {
        document.getElementById("errorpass").innerHTML ="Password must be 8 charecters";
        return flase;
    }
    
    if ( file == "") {
    document.getElementById("error").innerHTML="Please fill out file";
    return false;
  }
    
}
