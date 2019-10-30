<?php 
include_once 'database.php';
include_once 'session.php';

$email = $_SESSION['email'];
$query = "SELECT * FROM faculty WHERE email='$email'";
$result = mysql_query($query);
$data = mysql_fetch_array($result);
extract($data);

?>
<!DOCTYPE html>
<html>
<title>Faculty Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico">
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
  
<!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
<link rel="stylesheet" type="text/css" href="css/w3.css">

<body class="w3-light-grey">

<div class="w3-bar w3-top w3-black w3-large" style="background: linear-gradient(45deg, #00dbde, #fc00ff); z-index:4;">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-left" style="font-family:Edwardian Script ITC; font-size: 40px;">The Scheduler</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s12"><center>
    <br>
      <img src="images/icons/faculty.png" class="w3-circle w3-margin-right" style="width:46px">
      <div>Welcome, <strong><?php echo $facultyName; ?></strong> </div>
      </center>
    </div>
  </div>
  <hr>

<div class="w3-bar-block">


<?php
@$info=$_REQUEST['info'];
  if($info!="")
  { 

    if($info=="home")
    {
      echo '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_faculty.php?info=home" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_faculty.php?info=report" class="w3-bar-item w3-button w3-padding "><i class="fa fa-paper-plane fa-fw"></i>  Submit Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=view_report" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bar-chart fa-fw"></i>  View Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=profile" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Profile</a> </li>
    <li> <a href="dashboard_faculty.php?info=update_password" class="w3-bar-item w3-button w3-padding "><i class="fa fa-lock fa-fw"></i>  Change Password </a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="report")
    {
       echo '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_faculty.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_faculty.php?info=report" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-paper-plane fa-fw"></i>  Submit Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=view_report" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bar-chart fa-fw"></i>  View Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=profile" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Profile</a> </li>
    <li> <a href="dashboard_faculty.php?info=update_password" class="w3-bar-item w3-button w3-padding "><i class="fa fa-lock fa-fw"></i>  Change Password </a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="view_report")
    {
       echo '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_faculty.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_faculty.php?info=report" class="w3-bar-item w3-button w3-padding "><i class="fa fa-paper-plane fa-fw"></i>  Submit Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=view_report" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-bar-chart fa-fw"></i>  View Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=profile" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Profile</a> </li>
    <li> <a href="dashboard_faculty.php?info=update_password" class="w3-bar-item w3-button w3-padding "><i class="fa fa-lock fa-fw"></i>  Change Password </a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="profile")
    {
       echo '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_faculty.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_faculty.php?info=report" class="w3-bar-item w3-button w3-padding "><i class="fa fa-paper-plane fa-fw"></i>  Submit Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=view_report" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bar-chart fa-fw"></i>  View Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=profile" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-user fa-fw"></i>  Profile</a> </li>
    <li> <a href="dashboard_faculty.php?info=update_password" class="w3-bar-item w3-button w3-padding "><i class="fa fa-lock fa-fw"></i>  Change Password </a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="update_password")
    {
       echo '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_faculty.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_faculty.php?info=report" class="w3-bar-item w3-button w3-padding "><i class="fa fa-paper-plane fa-fw"></i>  Submit Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=view_report" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bar-chart fa-fw"></i>  View Report</a> </li>
    <li> <a href="dashboard_faculty.php?info=profile" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Profile</a> </li>
    <li> <a href="dashboard_faculty.php?info=update_password" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-lock fa-fw"></i>  Change Password </a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
  }
?>

<br><br>
  </div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:60px;">

<!-- Main Page -->
  <div style="background: white; display: inline-block; margin: 10px;padding: 20px; margin-top: 25px;width: 98%" id="main_content">
  
      <?php 
        @$info=$_REQUEST['info'];
        if($info!="")
        {
        if($info=="report")
        {
          include('frm_report.php');
          }
        elseif($info=="profile")
        {
          include('profile.php');
          }
        elseif($info=="view_report")
        {
          include('show_report.php');
          }           
        elseif($info=="update_password")
        {
          include('update_password.php');
          }
        }
        else
        {
        }
  
        ?>
      </div>
  <!-- Main Page Over -->


  <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">      
                </nav>
                <div class="copyright pull-right" style="margin: 10px; font-family: Poppins-Bold;margin-top: 20px;">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart" style="color: #b53ef6;"></i> by HeRo & L J C C A.
                </div>
            </div>
        </footer>


  <!-- End page content -->
</div>


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/animsition/js/jquery.validate.min.js"></script>
    <script src="vendor/animsition/js/jquery.validation.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--script src="vendor/select2/select2.min.js"></script-->
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
  <script src="vendor/jquery/sidenav.js"></script>
</body>
</html>