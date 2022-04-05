<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>
<!-- <link rel="stylesheet" href="project2.html"> -->
<script src="validate.js"></script>
<style>
    body {
        background-image: url("bill.webp");
        background-repeat: no-repeat;
        background-size: cover;

    }
    
    .login-box {
        margin: 200px 570px;
        border: 1px solid black;
        text-align: center;
       
    }
    
    input:focus {
        box-shadow: 1px solid black;
        text-align: center;
        outline: none;
        background-color: brown;
    }
    
    h1 {}
    
    button {
        border-radius: 5px;
    }
</style>

<body>
    <a href="project2.html"></a>
    <div class="login-box">
        <form action="" id="login-form" onsubmit="event.preventDefault();validatelogin()" method="POST" >
            <table>
                <tr>
                    <td>
                        <h1>Login Page</h1>
                    </td>
                </tr>
                <tr>
                    <td>User name</td>
                </tr>
                <tr>
                    <td><input type="text" class="input" id="user-name" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" class="input" id="password" name="password"></td>
                </tr>

                <tr>
                    <td><br><button type="submit" id="button">Login</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<?php
    include './database/dbconfig.php';
    if($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql =  "SELECT *  FROM `login` WHERE `username`= '$username' AND `password` = '$password'";
        if($result = mysqli_query($conn,$sql)){
            $num = mysqli_num_rows($result);
            if($num == 1){
                session_start();
                $_SESSION['logged'] =  true;
                header('location:Sales.php');
            }else{
                echo"login failed";
            }
        }
    }

?>