<?php 

include_once 'database.php';
include_once 'session.php';
?>
<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
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

<script type="text/javascript">
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("w3-purple");
    $(this).addClass("w3-purple");
});
});
</script>


<!-- Top container -moz-linear-gradient(left, #2f272f,#2f27ff,#2f272f)-->
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
      <div>Welcome, <strong>Admin</strong> </div>
      </center>
    </div>
  </div>
  <hr>
  
  <div class="w3-bar-block">
<?php
@$info=$_REQUEST['info'];
        if($info!="")
        { 

    if($info=="faculty")
    {
echo    '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_admin.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_admin.php?info=faculty " class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-users fa-fw"></i>  Faculty</a> </li>
    <li> <a href="dashboard_admin.php?info=subject" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Subject</a> </li>
    <li> <a href="dashboard_admin.php?info=class" class="w3-bar-item w3-button w3-padding"><i class="fa fa-columns fa-fw"></i>  Class</a> </li>
    <li> <a href="dashboard_admin.php?info=batch" class="w3-bar-item w3-button w3-padding" id="batch-menu"><i class="fa fa-bold fa-fw"></i>  Batch</a> </li>
    <li> <a href="dashboard_admin.php?info=report" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Report</a> </li>
    <li> <a href="dashboard_admin.php?info=gentime" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Generate Timetable</a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="subject")
    {
echo    '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_admin.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_admin.php?info=faculty " class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Faculty</a> </li>
    <li> <a href="dashboard_admin.php?info=subject" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-book fa-fw"></i>  Subject</a> </li>
    <li> <a href="dashboard_admin.php?info=class " class="w3-bar-item w3-button w3-padding "><i class="fa fa-columns fa-fw"></i>  Class</a> </li>
    <li> <a href="dashboard_admin.php?info=batch" class="w3-bar-item w3-button w3-padding" id="batch-menu"><i class="fa fa-bold fa-fw"></i>  Batch</a> </li>
    <li> <a href="dashboard_admin.php?info=report" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Report</a> </li>
    <li> <a href="dashboard_admin.php?info=gentime" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Generate Timetable</a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="class")
    {
echo    '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_admin.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_admin.php?info=faculty " class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Faculty</a> </li>
    <li> <a href="dashboard_admin.php?info=subject" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Subject</a> </li>
    <li> <a href="dashboard_admin.php?info=class " class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-columns fa-fw"></i>  Class</a> </li>
    <li> <a href="dashboard_admin.php?info=batch" class="w3-bar-item w3-button w3-padding" id="batch-menu"><i class="fa fa-bold fa-fw"></i>  Batch</a> </li>
    <li> <a href="dashboard_admin.php?info=report" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Report</a> </li>
    <li> <a href="dashboard_admin.php?info=gentime" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Generate Timetable</a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="batch")
    {
echo    '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_admin.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_admin.php?info=faculty " class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Faculty</a> </li>
    <li> <a href="dashboard_admin.php?info=subject" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Subject</a> </li>
    <li> <a href="dashboard_admin.php?info=class " class="w3-bar-item w3-button w3-padding "><i class="fa fa-columns fa-fw"></i>  Class</a> </li>
    <li> <a href="dashboard_admin.php?info=batch" class="w3-bar-item w3-button w3-padding w3-purple" id="batch-menu"><i class="fa fa-bold fa-fw"></i>  Batch</a> </li>
    <li> <a href="dashboard_admin.php?info=report" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Report</a> </li>
    <li> <a href="dashboard_admin.php?info=gentime" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Generate Timetable</a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="report")
    {
echo    '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_admin.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_admin.php?info=faculty " class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Faculty</a> </li>
    <li> <a href="dashboard_admin.php?info=subject" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Subject</a> </li>
    <li> <a href="dashboard_admin.php?info=class " class="w3-bar-item w3-button w3-padding "><i class="fa fa-columns fa-fw"></i>  Class</a> </li>
    <li> <a href="dashboard_admin.php?info=batch" class="w3-bar-item w3-button w3-padding" id="batch-menu"><i class="fa fa-bold fa-fw"></i>  Batch</a> </li>
    <li> <a href="dashboard_admin.php?info=report" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-bar-chart fa-fw"></i>  Report</a> </li>
    <li> <a href="dashboard_admin.php?info=gentime" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Generate Timetable</a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="gentime")
    {
echo    '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_admin.php?info=home" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_admin.php?info=faculty " class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Faculty</a> </li>
    <li> <a href="dashboard_admin.php?info=subject" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Subject</a> </li>
    <li> <a href="dashboard_admin.php?info=class " class="w3-bar-item w3-button w3-padding "><i class="fa fa-columns fa-fw"></i>  Class</a> </li>
    <li> <a href="dashboard_admin.php?info=batch" class="w3-bar-item w3-button w3-padding" id="batch-menu"><i class="fa fa-bold fa-fw"></i>  Batch</a> </li>
    <li> <a href="dashboard_admin.php?info=report" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Report</a> </li>
    <li> <a href="dashboard_admin.php?info=gentime" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-calendar fa-fw"></i>  Generate Timetable</a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    elseif($info=="home")
    {
echo    '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_admin.php?info=home" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_admin.php?info=faculty " class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Faculty</a> </li>
    <li> <a href="dashboard_admin.php?info=subject" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Subject</a> </li>
    <li> <a href="dashboard_admin.php?info=class " class="w3-bar-item w3-button w3-padding "><i class="fa fa-columns fa-fw"></i>  Class</a> </li>
    <li> <a href="dashboard_admin.php?info=batch" class="w3-bar-item w3-button w3-padding" id="batch-menu"><i class="fa fa-bold fa-fw"></i>  Batch</a> </li>
    <li> <a href="dashboard_admin.php?info=report" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Report</a> </li>
    <li> <a href="dashboard_admin.php?info=gentime" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Generate Timetable</a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';
    }
    else
    {
echo    '<ul id="side_custom">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> 
    <li> <a href="dashboard_admin.php?info=home" class="w3-bar-item w3-button w3-padding w3-purple"><i class="fa fa-dashboard fa-fw"></i>  Dashboard Home</a> </li>
    <li> <a href="dashboard_admin.php?info=faculty " class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Faculty</a> </li>
    <li> <a href="dashboard_admin.php?info=subject" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Subject</a> </li>
    <li> <a href="dashboard_admin.php?info=class " class="w3-bar-item w3-button w3-padding "><i class="fa fa-columns fa-fw"></i>  Class</a> </li>
    <li> <a href="dashboard_admin.php?info=batch" class="w3-bar-item w3-button w3-padding" id="batch-menu"><i class="fa fa-bold fa-fw"></i>  Batch</a> </li>
    <li> <a href="dashboard_admin.php?info=report" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Report</a> </li>
    <li> <a href="dashboard_admin.php?info=gentime" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Generate Timetable</a> </li>
    <li> <a href="logout.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-sign-out fa-fw"></i>  Logout</a> </li>
    </ul>';

    }

  }
?>
    

    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:60px;">

  <!-- Header >
  <header class="w3-container" style="padding-top:25px">
    <h3 style="font-size:35px; font-family: Poppins-Bold"><b> Admin Dashboard</b></h3>
  </header-->

  <!-- Main Page -->
  <div style="background: white; display: inline-block; margin: 10px;padding: 20px; margin-top: 25px;width: 98%" id="main_content">
  
      <?php 
        @$info=$_REQUEST['info'];
        if($info!="")
        {
        if($info=="faculty")
        {
          include('show_faculty.php');
          }
        elseif($info=="subject")
        {
          include('show_subject.php');
          }           
          elseif($info=="class")
        {
          include('show_class.php');
          }
        elseif($info=="batch")
        {
          include('show_batch.php');
          }
        elseif($info=="report")
        {
          include('show_report.php');
          }
        elseif($info=="gentime")
        {
          include('generate_timetable.php');
          }
        
        elseif($info=="frm_batch")
        {
          include('frm_batch.php');
          }
        elseif($info=="frm_class")
        {
          include('frm_class.php');
          }
        elseif($info=="frm_faculty")
        {
          include('frm_faculty.php');
          }
        elseif($info=="frm_subject")
        {
          include('frm_subject.php');
          }

        elseif($info=="update_batch")
        {
          include('update_batch.php');
          }
        elseif($info=="update_class")
        {
          include('update_class.php');
          }
        elseif($info=="update_faculty")
        {
          include('update_faculty.php');
          }
        elseif($info=="update_subject")
        {
          include('update_subject.php');
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
