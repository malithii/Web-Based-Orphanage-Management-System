<?php

session_start();

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login_design/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/css/util.css">
    <link rel="stylesheet" type="text/css" href="login_design/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">


    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100">


                <form class="login100-form validate-form" method="POST">
                    <button class="login100-form-btn" type="submit" onclick=" window.location.href='webapp/Home.php'"
                        style="background-color:green;width:70px;">
                        Back
                    </button>
                    <div>

                        <center>
                            <img src="images/handBLACK.png" width=200px height=200px>
                        </center>
                    </div>


                    <!--<span class="login100-form-title p-b-43">
						Login 
					</span>-->


                    <div class="wrap-input100">
                        <input class="input100" type="text" name="uname">
                        <span class="focus-input100"></span>
                        <span class="label-input100">UserName</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>




                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="login">
                            Login
                        </button>
                    </div>


                </form>

                <div class="login100-more" style="background-image: url('login_design/images/10512.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="login_design/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_design/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_design/vendor/bootstrap/js/popper.js"></script>
    <script src="login_design/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_design/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_design/vendor/daterangepicker/moment.min.js"></script>
    <script src="login_design/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="login_design/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="login_design/js/main.js"></script>

</body>

</html>



<!--////////////////////////////////////-->

<?php

if(isset($_POST['login'])){

$uname = mysqli_real_escape_string($Con,$_POST['uname']);

$pass = md5(mysqli_real_escape_string($Con,$_POST['pass']));

$get_admin = "select * from staff where username='$uname' AND password='$pass'";

$run_admin = mysqli_query($Con,$get_admin);

$row=mysqli_fetch_array($run_admin);
$user_type=$row['User_Type']; 
$name=$row['Name'];

$count = mysqli_num_rows($run_admin);

if($count==1 && $user_type=='Admin'){

$_SESSION['username']=$uname;
    $_SESSION['utype'] = $user_type;
    $_SESSION['name'] = $name;
//
//$sess = $_SESSION['username'];

echo "<script>alert('You are Logged in into system ')</script>";

echo "<script>window.open('index.php?overview','_self')</script>";

}
    else if($count==1 && $user_type=='Staff'){
        $_SESSION['username']=$uname;
          $_SESSION['utype'] = $user_type;
          $_SESSION['name'] = $name;
        echo "<script>alert('You are Logged in into system ')</script>";

echo "<script>window.open('index.php?overview_staff','_self')</script>";

    }
else {

echo "<script>alert('Username or Password is Wrong')</script>";

}

}

?>