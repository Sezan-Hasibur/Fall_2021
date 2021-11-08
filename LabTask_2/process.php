<?php
$formcontrol = array(
	'FirstName'=>$_POST["FirstName"],
	'LastName' =>$_POST["LastName"],
	'Age' => $_POST["Age"],
	'Email' =>$_POST["Email"],
	'Password' =>$_POST["Password"],
	'Designation' =>@$_POST["Designation"],
	'languaage1' =>@$_POST["languaage1"],
	'languaage2' =>@$_POST["languaage2"],
	'languaage3' =>@$_POST["languaage3"],
	'file' => @$_POST["File"]
);

$existingdata = file_get_contents('data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formcontrol;
 //Convert updated array to JSON
$jsonconvert = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 //write json data into data.json file
if(file_put_contents("data.json",$jsonconvert))
{
	echo "Data Saved Successfully";
}
else
echo " not saved";  
?>
