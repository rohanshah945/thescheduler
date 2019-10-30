<?php 
include_once 'database.php';
include_once 'session.php';
       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subject Details</title>
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
    window.location.href="delete_subject.php?id="+id;
    }
  
  }
</script>


     <script type="text/javascript">
          function get_subject_table(val)
          {
              $.ajax({
              type: "POST",
              url: "get_subject_table.php",
              data: 'semester_ID='+val,
              success: function(data){
                $("#sem-table").html(data);
              }
              });
          }
  </script>
<!--div class="container-contact100" style="align-items: inherit;">

  <div style="top: 0px; width: 100%; position: absolute fixed;">
  <span style="font-size:50px;color: white;cursor:pointer;float: right;" onclick="openNav()">&#9776;</span>
  <a href="" style="font-family: Edwardian Script ITC; font-size: 60px; color: whitesmoke ;"> The Scheduler</a>
  </div>
  <div class="wrap-contact100" style="width: 100%; position: relative; height:auto;"-->
  <span class="contact100-form-title" style="text-align: right; font-size: 29px;">
          Subject Details
  </span>

  <div class="wrap-input100 input100-select">
        <span class="label-input100">Select Semester</span>
        <div>
          <select class="selection-2" name="semester" onchange="get_subject_table(this.value)">
            <option value=" " selected disabled hidden>Select Semester</option>
            <?php 
              $selectquery = mysql_query("SELECT semester_ID FROM semester");
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
            ?>
          </select>
        </div>
        <span class="focus-input100"></span>
        </div> 
        <div id="dropDownSelect1"></div>


	<table class="table table-striped " id="sem-table">

    
    
    </table>  

        <button onclick="window.location.href='dashboard_admin.php?info=frm_subject'" class="btn-custom" style="float: left;"> Add Subject </button>






  <!--div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  </div-->
</div><script src="vendor/jquery/jquery-3.2.1.min.js"></script>
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