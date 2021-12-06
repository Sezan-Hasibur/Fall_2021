<?php
include('../model/db.php');
$searchName = $_POST['name'];
$searchInterset = $_POST['interest'];
$searchDesignation = $_POST['designation'];
if($searchName!="" || $searchInterset!="" || $searchDesignation!="")
{

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->SearchUsingName($conobj,"faculty",$searchName);
$YouQuery=$connection->SearchUsingInterest($conobj,"faculty",$searchInterset);
$HeQuery=$connection->SearchUsingDesignation($conobj,"faculty",$searchDesignation);
$allQuery=$connection->ShowAll($conobj,"faculty");

if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "*Please Search by valid Name*";
  }

  if ($YouQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
    // output data of each row
    while($row = $myQuery->fetch_assoc()) {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "*Please Search by valid Interset*";
  }

  if ($HeQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
    // output data of each row
    while($row = $hisQuery->fetch_assoc()) {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "*Please Search by valid Designation*";
  }
}

else{
  echo "Please Enter any data*";
  
}
$connection->CloseCon($conobj);



