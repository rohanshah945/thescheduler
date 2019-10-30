<?php 
include_once 'session.php'; 
include_once 'database.php';

$core = mysql_query("SELECT * FROM faculty WHERE facultyType = 'core' ");
$visiting = mysql_query("SELECT * FROM faculty WHERE facultyType = 'visiting' ");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Faculty Details</title>
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
  
  <script>
  function deleteData(id)
  {
    if(confirm("You want to delete ?"))
    {
    window.location.href="delete_faculty.php?id="+id;
    }
  
  }
</script>
<!--div class="container-contact100" style="align-items: inherit;">

  <div style="top: 0px; width: 100%; position: absolute fixed;">
  <span style="font-size:50px;color: white;cursor:pointer;float: right;" onclick="openNav()">&#9776;</span>
  <a href="" style="font-family: Edwardian Script ITC; font-size: 60px; color: whitesmoke ;"> The Scheduler</a>
  </div>
  <div class="wrap-contact100" style="width: 100%; position: relative; height:auto;"-->
  <span class="contact100-form-title" style="text-align: right;font-size: 29px;">
          Faculty Details
  </span>


	<table class="table table-striped ">
    <tr class="table-active">
        <th>Faculty Id </th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Date of Join</th>
    </tr>
  
<?php 
      while( $row = mysql_fetch_array( $core ) )
    {
      extract($row);
        echo "<tr> <td>";
        echo $faculty_ID;
        echo "</td><td>";
        echo $facultyName;
        echo "</td><td>";
        echo $email;
        echo "</td><td>";
     echo $contactNumber;
     echo "</td><td>";
        echo $dateOfJoin;
        echo "</td>";
        echo "<td><a  href='dashboard_admin.php?info=update_faculty&id=";
        echo $faculty_ID;
        echo "'>Edit </a><a href='javascript:deleteData(";
        echo $faculty_ID;
        echo ")'><p>   </p>     Delete</a></td></tr>";

    }
?>
     
        </table>   

      <button onclick="window.location.href='dashboard_admin.php?info=frm_faculty'" class="btn-custom" style="float: left;"> Add New Faculty </button>




  <!--div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  </div>
</div-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/jquery.validate.min.js"></script>
    <script src="vendor/animsition/js/jquery.validation.js"></script>
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

  <!--/div>
  <div class="wrap-contact100" >Designed & Developed by HeRo.</div-->
  </body>
</html>