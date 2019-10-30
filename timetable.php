<?php include_once 'session.php';
    
    if(isset($_post['day'])){
        echo "hey";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
        <style>
                tr { padding: 20px; }
                td { padding: 20px; border: black solid 1px;}
                table { font-size: 20px; }
        </style>
        
    </head>
    <body>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery/jquery-3.3.1.min.js"></script>
		<h1> The Scheduler </h1> <hr>
        
        <form method="post" action="">

        <select name="day" class="form-control" onchange="this.form.submit()">
            <option value=" " selected disabled hidden>Choose here</option>
            <option value="monday"> Monday </option>
            <option value="tuesday"> Tuesday </option>
            <option value="wednesday"> Wednesday </option>
            <option value="thursday"> Thursday </option>
            <option value="friday"> Friday </option>
            <option value="saturday"> Saturday </option>
        </select>

        <?php if(isset($_post['day'])) echo "<h3>".$_post['day']."</h3>" ?>
        <table>
            <tr> <th></th> <th>Class1</th> <th>Class2</th> <th>Class3</th> <th>Class4</th> <th>Class5</th> </tr>
            <tr> <th>FY-A</th> <td>$menu1</td> <td>$menu2</td> <td>$menu3</td> <td>$menu4</td> <td>$menu5</td> </tr>
            <tr> <th>FY-B</th> <td>$menu1</td> <td>$menu2</td> <td>$menu3</td> <td>$menu4</td> <td>$menu5</td> </tr>
            <tr> <th>SY-A</th> <td>$menu1</td> <td>$menu2</td> <td>$menu3</td> <td>$menu4</td> <td>$menu5</td> </tr>
            <tr> <th>SY-B</th> <td>$menu1</td> <td>$menu2</td> <td>$menu3</td> <td>$menu4</td> <td>$menu5</td> </tr>
            <tr> <th>TY-A</th> <td>$menu1</td> <td>$menu2</td> <td>$menu3</td> <td>$menu4</td> <td>$menu5</td> </tr>
            <tr> <th>TY-B</th> <td>$menu1</td> <td>$menu2</td> <td>$menu3</td> <td>$menu4</td> <td>$menu5</td> </tr>
        </table>
        
        </form>

    </body>
</html>