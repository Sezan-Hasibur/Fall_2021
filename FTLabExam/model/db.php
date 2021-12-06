<?php
class db{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }

function SearchName($conn,$table,$name) // Search using table name
 {
$result = $conn->query("SELECT * FROM $table WHERE Name='$name'");
 return $result;
 }

function ShowAll($conn,$table) // Show all data from table
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function SearchInterest($conn,$table,$interest) // Search using table interset
 {
$result = $conn->query("SELECT * FROM $table WHERE Interest='$interest'");
 return $result;
}

 function SearchDesignation($conn,$table,$udesignation) // Search using table designation
 {
$result = $conn->query("SELECT * FROM $table WHERE Designation='$designation'");
 return $result;
}


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
