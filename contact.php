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
		<form action="database-write.php" method="post">
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
		function formValidate(){
			var name, email, phone;
			name = document.getElementById("name").value;
			email = document.getElementById("email").value;
			phone = document.getElementById("phone").value;

			// name, email, and phone must be filled out check
			if(name==""){
				alert("Name must be filled out");
				return false;
			}
			if(email==""){
				alert("Email must be filled out");
				return false;
			}
			if(phone==""){
				alert("Email must be filled out");
				return false;
			}

			// make sure email is an email
			var emailPat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!emailPat.text(email)){
				alert("Please provide a valid email address");
				return false;
			}
		}
	</script>
</body>


</html>