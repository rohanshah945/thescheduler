<?php include_once 'session.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
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
<body>
<style type="text/css">
  .btn-custom {
    background-color: transparent; 
    color: purple; 
    border: 2px solid purple;
}

.btn-custom:hover {
    background-color: #b93bf6;
    color: white;
    border: 2px solid #b93bf6;
}
</style>
<div class="container-contact100" style="align-items: inherit;">

  <div style="top: 0px; width: 100%; position: absolute fixed;">
  <a href="" style="font-family: Edwardian Script ITC; font-size: 60px; color: whitesmoke ;"> The Scheduler</a>
  <!--div style="float:right; margin-right: 10px;">
  <span class="capsule"><center!-->
  <button onclick="window.location.href='login.php'" class="btn-custom " style="float: right; "> Login </button><!--/center>
  <div align="center" style="margin-top: 10px; color: white;font-weight: 800;">Login</div></span>
  </div-->
  </div>
  <div class="wrap-contact100" style="width: 100%; position: relative; height: auto;">
  <span class="contact100-form-title" style="text-align: right;">
          Time-Table
  </span>

  

  <div class="wrap-input100 input100-select">
        <span class="label-input100">Select Semester</span>
        <div>
          <select class="selection-2" name="gender">
            <option value=" " selected disabled hidden>Select Semester</option>
            
          </select>
        </div>
        <span class="focus-input100"></span>
        </div> 
        <div id="dropDownSelect1"></div>
        <div>
          <?php include_once 'generate_timetable_sem1.php'; ?>
        </div>

  </div>
  
  

  </div>
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
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
  <script src="js/Chart.min.js"></script>
  
  <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">      
                </nav>
                <div class="copyright pull-right" style="margin: 10px; font-family: Poppins-Bold;margin-top: 20px;">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart" style="color: #b53ef6;"></i> by HeRo & L J C C A.
                </div>
            </div>
        </footer>

  </body>
</html>