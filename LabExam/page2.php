<?php
include( 'logincheck.php');
?>
<!DOCTYPE html>
<html>
<body>
    <fieldset>
<form>
<h1><b> Education </b></h1>
<hr>
<table>
	<tr><td>University: <input type="text" name="uni_name"></td></tr>

	<tr><td>Degree: <input type="text" name="degree"></td></tr>
   
   	<tr><td>Major: <input type="text" name="major"></td></tr>
   	
   	<tr><td>Result: <input type="text" name="result"></td></tr>
   	
   	<tr><td>Passing Year: <input type="date" name="year"></td></tr>

	   <td><a href ="db.php"><input type="button" value="Submit"> 
</a></td>
	
</table>
 </form>
</fieldset>
</body>
    </html>
