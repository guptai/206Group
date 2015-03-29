<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link href="default.css" rel="stylesheet">
	<link href="style2.css" rel="stylesheet">
	<script type="text/javascript">
		 function checkEmail(){
		 	if (em.value != em2.value){
				alert("The emails must match!");
				return false;
			}
		}
	</script>
</head>
<body>
<form action="gotIt.php" method = "POST" onsubmit = "return checkEmail()">
<h1>Ann Arbor Social Scene Survey</h1>	
<fieldset>
	<legend></legend>
	<label>Name: <input type = "name" name = "name" value = "Brian" required/></label>
	<label>Email:<input type = "email" name = "email" id = "em" required/></label>
	<label>Confirm Email:<input type = "email" name = "confirm" id = "em2" required/></label>
	
	<fieldset>
	<div id="student"><legend>Are you a student?</legend>
	<input type="radio" name="Undergrad" value="Undergrad" />Undergrad <br />
    <input type="radio" name="Graduate" value="Graduate" />Graduate<br />
    <input type="radio" name="Other" value="Other" />Other<br /> </div>
	</fieldset>
	
	<fieldset>
	<div id="site"><legend>What information do you come to the site for?</legend>
	<input type="checkbox" name="Restaurant" value="Restaurant"  />Restaurant <br />
    <input type="checkbox" name="Bars" value="Bars"/>Bars<br />
    <input type="checkbox" name="Other" value="Other"/>Other<br /></div>
	</fieldset>
	
	<fieldset>
	<div id="twitter"><legend>Do you follow us on Twitter?</legend>
	<input type="radio" name="Yes" value="Yes" />Yes <br />
    <input type="radio" name="No" value="No"/>No<br /> </div>
	</fieldset>
	<input type = "submit" value ="Send data"/>
</fieldset>

</form>	
</body>
</html>
