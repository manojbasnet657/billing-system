<?php
	include 'database/dbconfig.php';

		
	if(isset($_POST['user_name']) && isset($_POST['pwd']) ){
		$username = $_POST['user_name'];
		$password = $_POST['pwd'];

		$sql = "SELECT * FROM `user_details` WHERE `user_name`= '$username' && `password`='$password'";
		
		if( $result = mysqli_query($conn, $sql)){
			$num = mysqli_num_rows($result);
			if($num > 0){

				$row = mysqli_fetch_assoc($result);
				session_start();
				$_SESSION['username'] = $row['user_name'];
				$_SESSION['login'] = true;
				header("location:billdetailsforcustomer.php?t_id=".$_REQUEST['pan']);
			}else{
				echo"Inccorect password or invalid username";
			}
			
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
		.center{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			
		}
		body{ background-color: whitesmoke;
			background-image: url('New folder/b.jpg');
			background-size: cover;

		}
		a{
			color:palevioletred;

		}
		div.login{
			
			display: grid;
			grid-auto-columns:   49vw 49vw;
			margin: 0;
		}

		div.l1{
			
			margin: 0;
			width: 40vw;

		}
		div.l2{
			border: 1px solid black;
			margin: 0;
			width: 40vw;


		}
		form{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		h1{
			color: whitesmoke;
			text-align: center;
		}
		label{
			color: white;
		}
	</style>
</head>
<body>
 
	

<div class="center">
	<div class="login">
		<div class="l1">			
				<h1>User Login</h1>

			<form action="" method="POST" >
					
						<label for="userName">User Name:</label>
						<input type="text" name="user_name" placeholder="User Name.." >
						<label for="password">Password:</label>
						<input type="password" name="pwd" placeholder="****" >
						<label for="pan">Pan no:</label>
						<input type="password" name="pan" placeholder="Enter your pan number" >
							<input type="submit" name="login" value="login"><br>
						<button><a href="signup.php">Sign Up</a></button>
					<button><a href="admin-login.php"> Admin-login</a></button>
							
							
			</form>
		</div>	
	</div> 
</div>		 
</body>
</html>



<?php







?>
		


				 