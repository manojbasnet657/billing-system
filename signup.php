<?php



include 'database/dbconfig.php';





if(isset($_POST['gender']) && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) ){
	$gender = $_POST['gender'];
	$fullname = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "INSERT INTO user_details(`full_name`, `user_name` , `password`,`gender`)VALUES('$fullname','$username','$password','$gender')";
	$result = mysqli_query($conn, $sql);
	
	if ($result) {
		
		echo"sucessfully sign up  ";
		header("location:login.php");
	} else {
		echo "user exist try another";
	}
}
?>





<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="project.css">
	<title>Login form</title>
	<style>
		body{
			
			background-image: url('New folder/Bills.webp');
			background-repeat: no-repeat;
			background-size: cover;
		}
		.center{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		table{
			display: flex;
			align-items: center;
			justify-content: center;
			
			row-gap: 10px;
		}
		
		div.login {
			border: 1px solid black;
			display: grid;
			grid-auto-columns: 49vw 49vw;
			margin: 0;
		}

		div.l1 {
			border: 1px solid black;
			margin: 0;
			width: 40vw;

		}

		div.l2 {
			border: 1px solid black;
			margin: 0;
			width: 40vw;


		}
		h1{
			color: whitesmoke;
			text-align: center;
			color: black;
		}
		label{
			color: white;
		}
	</style>
</head>

<body>


<div class="center">
	<form method="POST" action="">
		<div class="l2">
			<div class="create">
				<h1><b>Sign Up</b></h1>
				<table>
					<div>
					<tr>
						<td>Full Name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					</div>
					<div>
					<tr>
						<td>User Name:</td>
						<td><input type="text" name="username"></td>
					</tr>
					</div>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email"></td>
					</tr>

					<tr>
						<td>Password:</td>
						<td><input type="password" name="password"></td>
					</tr>

					<tr>
						<td>Gender:</td>
						<td><input type="radio" name="gender" value="Female">Female
							<input type="radio" name="gender" value="Male">Male
							<input type="radio" name="gender" value="Rather Not Say">Other

						</td>
					</tr>
					<tr>
						<td><a href="login.php"><button type="button">Return to login</button></a></td>
						<td><input type="submit" value="Signup"></td><br>
						
					</tr>
				</table>
			</div>

		</div>
		</div>
	</form>
	</div>
</body>

</html>