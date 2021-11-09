<?php
include( 'db.php');
session_start(); 
$error="";

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['full_name'])) 
$error = "Username or Password is invalid";

else
{
    
   $_SESSION["username"] = $username;
   $_SESSION["password"] = $password;
   $_SESSION["fullname"] = $fullname;
   $_SESSION["mobno"] = $mobno;
   $_SESSION["bdy"] = $bdy;
   $_SESSION["uni_name"] = $uni_name;
   $_SESSION["degree"] = $degree;
   $_SESSION["major"] = $major;
   $_SESSION["result"] = $result;
   $_SESSION["year"] = $year;

$connection =new db();
$conobj =$connection->OpenCon();

$userQuery=$connection->InsertUser( $conobj, "employee", $username, $password,$fullname, $mobno, $bdy, $uni_name, $degree, $major, $result, $year);
if($userQuery==TRUE){
        header("location: page2.php");
        
    $error="Data Inserted";}


    else {
        $error = "Data not inserted".$conobj->error;
    }
   @$connection->CloseCon($conobj);
}
}
?>
