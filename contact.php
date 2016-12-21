<!DOCTYPE html>
<?php $thisPage = "contact"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Project 3</title>
    <?php include "inc/top.inc"; ?>
	<?php include "inc/nav.inc"; ?>


	<div class="container">
	<h1>Contact</h1>
		<form name="myForm" action="database-write.php" onsubmit="return validateForm()" method="post">
			<div>
	            <label for="name">Name: </label>
	            <input type="text" name="name" id="name">
	         </div>

	         <div>
	            <label for="email">E-Mail: </label>
	            <input type="text" name="email" id="email">
	         </div>

	         <div>
	            <label for="phone">Telephone: </label>
	            <input type="text" name="phone" id="phone">
	         </div>

	         <div>
	            <label for="message">Message: </label>
	            <textarea></textarea>
	         </div>

	         <div>
	            <input type="submit" value="Submit">
	         </div>
		</form>
	</div>


	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<!-- Form Validation with Javascript-->
	<script>
		function validateForm(){
			var name = document.forms["myForm"]["name"].value;
			var email = document.forms["myForm"]["email"].value;
			var phone = document.forms["myForm"]["phone"].value;

			// name, email, and phone must be filled out check
			if(name==""){
				alert("Name must be filled out");
				return false;
			}
			if(email==""){
				alert("Email must be filled out");
				return false;
			}
			ValidateEmail(email);
			if(phone==""){
				alert("Phone number must be filled out");
				return false;
			}ValidateEmail(email);
		}

		function ValidateEmail(mail){  
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){  
		    	return (true)  
			} 
		    alert("You have entered an invalid email address!")  
		    return (false)  
		}

	</script>
</body>


</html>