<?php 
include_once 'session.php';
include_once 'database.php'; 

function fetch_subject()
{
$selectquery = mysql_query("SELECT subjectName,subject_ID FROM subject WHERE semester_ID =1");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $subject_ID;
echo "'>";
echo $subjectName;
echo "</option>";
}
}


function fetch_subject_fyA1()
{
$selectquery = mysql_query("SELECT subjectName,subject_ID FROM subject WHERE semester_ID =1");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $subject_ID;
echo "'>";
echo $subjectName;
echo "</option>";
}
}

function fetch_subject_fyB1()
{
$selectquery = mysql_query("SELECT subjectName,subject_ID FROM subject WHERE semester_ID =1");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $subject_ID;
echo "'>";
echo $subjectName;
echo "</option>";
}
}

function fetch_subject_syA1()
{
$selectquery = mysql_query("SELECT subjectName,subject_ID FROM subject  WHERE semester_ID =3");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $subject_ID;
echo "'>";
echo $subjectName;
echo "</option>";
}
}

function fetch_subject_syB1()
{
$selectquery = mysql_query("SELECT subjectName,subject_ID FROM subject  WHERE semester_ID =3");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $subject_ID;
echo "'>";
echo $subjectName;
echo "</option>";
}
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generate Timetable</title>
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

        <style>
                tr { padding: 20px; }
                td { padding: 20px; border: black solid 1px;}
                table { font-size: 20px; }
        </style>

        <!--script type="text/javascript">
          function get_syA1(val)
          {
              $.ajax({
              type: "POST",
              url: "get_syA1.php",
              data: 'subject_ID='+val,
              success: function(data){
                $("#syA1").html(data);
                $("#syB1").html(data);
                $("#tyA1").html(data);
                $("#tyB1").html(data);
              }
              });
          }
          onchange="get_syA1(this.value);"
        </script-->
<script type="text/javascript">
  function fun1(){
   alert('hey') ;

  }
  function fun2(){
   alert('hello') ;
  }
</script>
  
<!--div class="container-contact100" style="align-items: inherit;">

  <div style="top: 0px; width: 100%; position: absolute fixed;">
  <span style="font-size:50px;color: white;cursor:pointer;float: right;" onclick="openNav()">&#9776;</span>
  <a href="" style="font-family: Edwardian Script ITC; font-size: 60px; color: whitesmoke ;"> The Scheduler</a>
  </div>
  <div class="wrap-contact100" style="width: 100%; position: relative; height:auto;"-->
  <span class="contact100-form-title" style="text-align: right;">
          Generate Timetable
  </span>


<div class="wrap-input100 input100-select">
        <span class="label-input100">Day</span>
        <div>
          <select class="selection-2" name="day">
            <option value=" " selected disabled hidden>Select Day</option>
            <option value="monday"> Monday </option>
            <option value="tuesday"> Tuesday </option>
            <option value="wednesday"> Wednesday </option>
            <option value="thursday"> Thursday </option>
            <option value="friday"> Friday </option>
            <option value="saturday"> Saturday </option>
          </select>
        </div>
        <span class="focus-input100"></span>

        <div id="dropDownSelect1"></div>
        </div> 


<table>
            <tr> <th></th> <th>Class1</th> <th>Class2</th> <th>Class3</th> <th>Class4</th> <th>Class5</th> </tr>

            <tr>
            <th>FY-A</th> 
            <td><select class="form-control" name="fyA1" onchange="fun1(); fun2();"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject_fyA1() ?></select></td> 
            <td><select class="form-control" name="fyA2"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="fyA3"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="fyA4"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="fyA5"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            </tr>

            <tr>
            <th>FY-B</th> 
            <td><select class="form-control" name="fyB1"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject_fyB1()
            ?></select></td> 
            <td><select class="form-control" name="fyB2"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="fyB3"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="fyB4"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="fyB5"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            </tr>

            <tr>
            <th>SY-A</th> 
            <td><select class="form-control" name="syA1"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject_syA1() 
            ?></select></td> 
            <td><select class="form-control" name="syA2"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="syA3"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="syA4"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="syA5"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            </tr>

            <tr>
            <th>SY-B</th> 
            <td><select class="form-control" name="syB1"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject_syB1() ?></select></td> 
            <td><select class="form-control" name="syB2"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="syB3"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="syB4"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="syB5"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            </tr>

            <tr>
            <th>TY-A</th> 
            <td><select class="form-control" name="tyA1"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td> 
            <td><select class="form-control" name="tyA2"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="tyA3"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="tyA4"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="tyA5"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            </tr>

            <tr>
            <th>TY-B</th> 
            <td><select class="form-control" name="tyB1"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td> 
            <td><select class="form-control" name="tyB2"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="tyB3"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="tyB4"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            <td><select class="form-control" name="tyB5"><option value="" selected disabled hidden>Select Day</option><?php echo fetch_subject() ?></select></td>
            </tr>


            <!--tr> <th>FY-B</th> <td>$menu12</td> <td>$menu22</td> <td>$menu32</td> <td>$menu42</td> <td>$menu52</td> </tr>
            <tr> <th>SY-A</th> <td>$menu13</td> <td>$menu23</td> <td>$menu33</td> <td>$menu43</td> <td>$menu53</td> </tr>
            <tr> <th>SY-B</th> <td>$menu14</td> <td>$menu24</td> <td>$menu34</td> <td>$menu44</td> <td>$menu54</td> </tr>
            <tr> <th>TY-A</th> <td>$menu15</td> <td>$menu25</td> <td>$menu35</td> <td>$menu45</td> <td>$menu55</td> </tr>
            <tr> <th>TY-B</th> <td>$menu16</td> <td>$menu26</td> <td>$menu36</td> <td>$menu46</td> <td>$menu56</td> </tr-->
        </table>


  
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