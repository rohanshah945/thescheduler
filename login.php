<?php
include_once 'database.php';
include_once 'session.php';

if(isset($_POST['loginBtn'])){

    if($_POST['email'] =='admin@thescheduler.org' && $_POST['fpassword'] == 'admin') {
        header("location: dashboard_admin.php?info=home");
    } else {
        
        //collect form data
        $email = $_POST['email'];
        $passwordd = $_POST['fpassword'];
        $frm_password = base64_encode($passwordd);


        $sqlQuery = "SELECT * FROM faculty WHERE email ='$email' AND password ='$frm_password'";
        $statement = mysql_query($sqlQuery) or die(mysql_error());

/*
        //check if user exist in the database
        $sqlQuery = "SELECT * FROM faculty WHERE email ='$email'";
        $statement = mysql_query($sqlQuery) or die(mysql_error());
*/    
        if (empty(mysql_fetch_array($statement))) {
            echo "<script>";
            echo "alert('Invalid Login Details.')";
            echo "</script>";
        }
    
        else {
        $_SESSION['email'] = $email;
        echo "<script>window.location='dashboard_faculty.php?info=home'</script>";
            
        /*$sqlQuery1 = "SELECT * FROM faculty WHERE email ='$email' AND password ='$frm_password'";
        $statement1 = mysql_query($sqlQuery1) or die(mysql_error());
        
            if (empty(mysql_fetch_array($statement1))) {
            echo "<script>";
            echo "alert('Email ID and Password does Not Match.')";
            echo "</script>";
            }

            else {
            while($row1 = mysql_fetch_array($statement1)) {
                extract($row1);
                $_SESSION['email'] = $email;
                echo "<script>window.location='dashboard_faculty.php'</script>";
            }
            }  */ 
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/checkbox.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
</head>
<body style="background: linear-gradient(45deg, #00dbde, #fc00ff)">

    
<div class="container-contact100">


    <div style="top: 0px; width: 100%; position: absolute fixed inherit;">
    

    
    </div>

    <div class="wrap-contact100" style="width: 50%;position: relative; height: auto; top: 0px;">
    <center><a href="index.php" style="font-family: Edwardian Script ITC; font-size: 50px;font-weight: bold; color: black ;"> The Scheduler</a></center><hr>
    <form method="post" id="frm_login" action="">
                <!--span class="contact100-form-title" style="text-align: right;">
                    Login
                </span--> <br>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Email ID</span>
                    <input class="input100" type="email" name="email" placeholder="Enter Email ID" required>
                    <span class="focus-input100"></span>
                </div> 

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="fpassword" id="fpassword" placeholder="Enter Password" required>
                    <span class="focus-input100"></span>
                </div> <br>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="submit" value="signin" name="loginBtn" id="loginBtn">
                            <span>
                                Login
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <br>
                <center>
                <a href="forgetpassword.php">Forget Password</a></center>
    </form>

<br>
    <div class="copyright pull-right" style="margin: 10px; font-family: Poppins-Bold;margin-top: 30px;margin-right: -10px;margin-bottom: -20px;">
    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart" style="color: #b53ef6;"></i> by HeRo & L J C C A.
    </div>
            


    </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--script src="vendor/animsition/js/jquery.validate.min.js"></script>
    <script src="vendor/animsition/js/jquery.validation.js"></script-->
    <script src="vendor/jquery/sidenav.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</div>

</body>
</html>