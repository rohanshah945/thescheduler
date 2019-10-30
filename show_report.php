<?php
include_once 'database.php';
include_once 'session.php';


function fetchsemester()
{
$selectquery = mysql_query("SELECT DISTINCT semester_ID FROM semester");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $semester_ID;
echo "'> Semester ";
echo $semester_ID;
echo "</option>";
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reports</title>
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


<!--div class="container-contact100" style="align-items: inherit;">

  <div style="top: 0px; width: 100%; position: absolute fixed;">
  <span style="font-size:50px;color: white;cursor:pointer;float: right;" onclick="openNav()">&#9776;</span>
  <a href="" style="font-family: Edwardian Script ITC; font-size: 60px; color: whitesmoke ;"> The Scheduler</a>
  </div>
  <div class="wrap-contact100" style="width: 100%; position: relative; height: auto;"-->
  <span class="contact100-form-title" style="text-align: right;font-size: 29px;">
          View Report
  </span>

  

  <!--div class="wrap-input100 input100-select">
        <span class="label-input100">Select Semester</span>
        <div>
          <select class="selection-2" name="semester_ID" onchange="get_reportd(this.value)";>
            <option value=" " selected disabled hidden>Select Semester</option>
            <?php fetchsemester(); ?>
          </select>
        </div>
        <span class="focus-input100"></span>
        </div> 
        <div id="dropDownSelect1"></div>
        <p id="reportd"></p-->

        <div>
        <h3>Semester 1</h3>
        <canvas id="barChart1" width="50px"></canvas>
        </div>
        <hr>
        <div>
        <h3>Semester 2</h3>
        <canvas id="barChart2" width="50px"></canvas>
        </div>
        <hr>
        <div>
        <h3>Semester 3</h3>
        <canvas id="barChart3" width="50px"></canvas>
        </div>
        <hr>
        <div>
        <h3>Semester 4</h3>
        <canvas id="barChart4" width="50px"></canvas>
        </div>
        <hr>
        <div>
        <h3>Semester 5</h3>
        <canvas id="barChart5" width="50px"></canvas>
        </div>
        <hr>
        <div>
        <h3>Semester 6</h3>
        <canvas id="barChart6" width="50px"></canvas>
        </div>
        </div>
  
  <!--div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Dashboard</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  </div>

  </div-->
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
  <script src="vendor/jquery/sidenav.js"></script>
  <script src="chart/sem1_report.js"></script>
  <script src="chart/sem2_report.js"></script>
  <script src="chart/sem3_report.js"></script>
  <script src="chart/sem4_report.js"></script>
  <script src="chart/sem5_report.js"></script>
  <script src="chart/sem6_report.js"></script>

  <!--div class="wrap-contact100" >Designed & Developed by HeRo.</div-->
  </body>
</html>