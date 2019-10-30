
<?php 
include_once 'database.php';
include_once 'session.php';
?>

		<tr class="table-active">
        <th>Subject ID</th>
        <th>Subject Name</th>
        <th>Semester</th>
        <th>Faculty Name</th>
        <th>Sessions Per Week</th>
    	</tr>

<?php
$selectquery = mysql_query("SELECT * FROM subject WHERE semester_ID='".$_POST['semester_ID']."'");
    while( $row = mysql_fetch_array( $selectquery ) )
    {
        extract($row);
        echo "<tr> <td>";
        echo $subject_ID;
        echo "</td><td>";
        echo $subjectName;
        echo "</td><td>";
        echo $semester_ID;
        echo "</td><td>";
        $faculty_Name = mysql_fetch_assoc(mysql_query("SELECT facultyName FROM faculty WHERE faculty_ID like '".$faculty_ID."'"));
        extract($faculty_Name);
        echo $facultyName;
        //echo $faculty_ID;
        echo "</td><td>";
        echo $sessionPerWeek;
        echo "</td>";
        echo "<td><a  href='dashboard_admin.php?info=update_subject&id=";
        echo $subject_ID;
        echo "'>Edit </a><a href='javascript:deleteData(";
        echo $subject_ID;
        echo ")'><p>   </p>     Delete</a></td></tr>";
    }
?>
