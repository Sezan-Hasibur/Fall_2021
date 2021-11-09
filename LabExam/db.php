<?php
class db{
function OpenCon() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "cv";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}

function InsertUser($conn,$table,$username, $password,$fullname, $mobno, $bdy,  $uni_name, $degree, $major, $result, $year) {

    $sql = "INSERT INTO employee (username,password, fullname, mobno,bdy, uni_name, degree, major, result, year) VALUES 
    ('$username',' $password','$fullname', '$mobno', '$bdy' , '$uni_name' , '$degree' , '$major' , '$result' , '$year' )";

   if ($conn->query($sql) === TRUE) {
       $result= TRUE;
   } else {
       $result= FALSE ;
   }
   return  $result;
}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
