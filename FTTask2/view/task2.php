<!DOCTYPE html>
<html>
<body>
    <fieldset>
    <h1><b>Registration Form</b></h1>
	<hr>
	<form action="" method ="post" onsubmit="return validatefrm()">
    <script type="text/javascript" src="../js/Validatetask2.js"></script>
		<table>
			
			<tr>
			    <td>FirstName:</td>
		        <td><input type="text" id="fname" name="FirstName" placeholder="Enter your first name"> </td>  
		        
		    </tr>
            <p id="errorfname"></p>
			<tr>
			    <td>LastName:</td>
		        <td><input type="text" id="lname" name="LastName" placeholder="Enter your last name"> 
		          </td>  
		        
		    </tr>
            <p id="errorlname"></p>
		    <tr>
			    <td>Age:</td>
		        <td><input type="text" id="age" name="Age" placeholder="Enter your Age"> 
		          </td>  
		        
		    </tr>   
            <p id="errorage"></p>
            <tr>
			    <td>Designation:</td>
		        <td>
		        	<input type="radio" id="Designation" name="Designation" value="juniorProgrammer">
		        	juniorProgrammer
		        	<input type="radio" name="Designation"
		        	value="SeniorProgrammer">
		        	SeniorProgrammer
		        	<input type="radio" name="Designation"
		        	value="ProjectManager">
		        	Project Manager
		        </td>
		    </tr>
            <p id="errorDeg"></p>
		    <tr>
		    	<td>
		    		Prefferred language:
		    </td>
		    <td>
		    		<input type="checkbox" id="language" name="languaage1" value="JAVA">
		    		JAVA
		    		<input type="checkbox" id="language" name="languaage2" value="PHP">
		    		PHP
		    		<input type="checkbox" id="language" name="languaage3" value="C++">
		    		C++
		    		<br>
		    		
		    </td>
		    </tr>
            <p id="errorlanguage"></p>	 
			<tr>
			    <td>Email:</td>
		        <td><input type="Email" id="email" name="Email" placeholder="Enter your Email">  </td>
		    </tr> 
            <p id="erroremail"></p>
		    <tr>
			    <td>Password:</td>
		        <td><input type="Password" id="pass" name="Password" placeholder="Enter your Password">  </td>
		    </tr> 	
            <p id="errorpass"></p>	    
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
