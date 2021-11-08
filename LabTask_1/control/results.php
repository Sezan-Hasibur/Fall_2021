<?php
$validatefname="";
$validateLname="";
$validateemail="";
$validatepassword="";
$validatecheckbox="";
$validateradio="";
$validateage="";
$L1=$L2=$L3="";
$firstname=$lastname=$age=$email=$pw=$Programmer="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$age=$_REQUEST["age"];
$pw=$_REQUEST["pw"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["firstname"]) || (strlen($_REQUEST["firstname"])<5))
{
    $validatefname= "*Firest Name Required";

}
else
{
    $firstname=$_REQUEST["firstname"];
    $validatefname = " // Your First Name is :".$firstname;
}

if(empty($_REQUEST["lastname"]) || (strlen($_REQUEST["lastname"])<5))
{
    $validateLname= "*Last Name Required";

}
else
{
    $lastname=$_REQUEST["lastname"];
    $validateLname = " // Your Last Name is : ".$lastname;
}

if(empty($_REQUEST["age"]))
{
    $validateage= "*Your Age Required";

}
else
{
    $lastname=$_REQUEST["age"];
    $validateage = " // Your Age is : ".$age;
}
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="*Email Address Required";
}
else{
    $validateemail= " // Your Email Address is :".$email;
}


 if(!preg_match("/(?=.*[@#$%^&+=]).*$/", $pw)) {
                $pw = "*Password have atlest 1 specail character";
            } 
            if(strlen($pw) < 8) {
                $pw = "Password must contain atleast 8 characters||";
            }
            else {
                $validatepassword= "".$pw;
            }
if(!isset($_REQUEST["Languague1"])&&!isset($_REQUEST["Languague2"])&&!isset($_REQUEST["Languague3"]))
{
    $validatecheckbox = "*Select atlest one";
    
}
else{
   if(isset($_REQUEST["Languague1"]))
   {
       $L1= $_REQUEST["Languague1"];
   }
   if(isset($_REQUEST["Languague2"]))
   { 
       $L2= $_REQUEST["Languague2"];
   }
   if(isset($_REQUEST["Languague3"]))
   {
    $L3= $_REQUEST["Languague3"];
   }
}
if(isset($_REQUEST["Programmer"]))
{
    $validateradio= $_REQUEST["Programmer"];
}
else{
    $validateradio= "*Select atlest one";
}
}
?>
