<?php
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="Select * from `signup` where username='$username' and password='$password'";
    $result=mysqli_query($con, $sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');
        }
        else{
            $invalid=1;
        }
    }
}

?>



<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login Page</title>
    <style>
        @charset "UTF-8";
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        header .header {
            background-color: #fff;
            height: 45px;
        }

        header a img {
            width: 134px;
            margin-top: 4px;
        }

        .signup-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }

        .signup-page .form .login {
            margin-top: -31px;
            margin-bottom: 26px;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 15px;
        }

        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background-color: #2b43b1;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form .message {
            margin: 15px 0 0;
            color: #000000;
            font-size: 15px;
        }

        .form .message a {
            color: #000000;
            text-decoration: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        body {
            /* background-color: linear-gradient(45deg,#1212f3,#e80f9c)#1adaec,#fc1afc; */

            background-image: linear-gradient(180deg, #32a3dc, #ffffff);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body,
        html {
            height: 100%;
            width: 100%;
            margin: 0;
        }

        .form .message {
            margin: 15px 0 0;
            color: #000000;
            font-size: 15px;
        }

        .form .message a {
            color: #000000;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="alert/dist/sweetalert.css">

</head>

<body>

<?php
if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success! </strong> You are logged in.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>'; 
}

?>

<?php
if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error! </strong> Invalid credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>'; 
}

?>


    <div class="signup-page">
        <div class="form">
            <div class="signup">
                <div class="signup-header">
                    <h3><b>LOGIN</b></h3>
                    <p>Please enter your credentials to log in.</p>
                </div>
            </div>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <button>log in </button>
                 <p class="message">Not registered? <a href="signup.php"><b>Create an account</b></a></p>

            </form>
        </div>
    </div>
</body> 
</html>