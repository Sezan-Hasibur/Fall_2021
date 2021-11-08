<!DOCTYPE html>
<html>
<body>
    <fieldset>
    <h1><b>Registration Form</b></h1>
	<hr>
	<form action= "process.php" method ="post">
		<table>
			
			<tr>
			    <td>FirstName:</td>
		        <td><input type="text" name="FirstName" placeholder="Enter your first name">   </td>  
		        
		    </tr>
			<tr>
			    <td>LastName:</td>
		        <td><input type="text" name="LastName" placeholder="Enter your last name"> 
		          </td>  
		        
		    </tr>
		    			<tr>
			    <td>Age:</td>
		        <td><input type="text" name="Age" placeholder="Enter your Age"> 
		          </td>  
		        
		    </tr>   

            <tr>
			    <td>Designation:</td>
		        <td>
		        	<input type="radio" name="Designation" value="juniorProgrammer">
		        	juniorProgrammer
		        	<input type="radio" name="Designation"
		        	value="SeniorProgrammer">
		        	SeniorProgrammer
		        	<input type="radio" name="Designation"
		        	value="ProjectManager">
		        	Project Manager
		        </td>
		    </tr>
		    <tr>
		    	<td>
		    		Prefferred language:
		    </td>
		    <td>
		    		<input type="checkbox" name="languaage1" value="JAVA">
		    		JAVA
		    		<input type="checkbox" name="languaage2" value="PHP">
		    		PHP
		    		<input type="checkbox" name="languaage3" value="C++">
		    		C++
		    		<br>
		    		
		    </td>
		    </tr>
			<tr>
			    <td>Email:</td>
		        <td><input type="Email" name="Email" placeholder="Enter your Email">  </td>
		    </tr> 
		    <tr>
			    <td>Password:</td>
		        <td><input type="Password" name="Password" placeholder="Enter your Password">  </td>
		    </tr> 		    
		    <tr>
		    	<td>
		    		please choose a file:
		    	</td>
		    	<td><input type="file" name="image"></td>
		    </tr> 
		    <br>
		</table>
			 <input type="submit" value="submit" >
		    <input type="reset" name="reset">		
</form>
</fieldset>
</body>
</html>
