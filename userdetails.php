<?php
require_once('connection.php');
session_start();
	echo "<table border = 1>";
	echo "<tr>";
	echo "<th>Register Number</th>";
	echo "<th>Name</th>";
	echo "</tr>";
	
	
	echo "<tr>";
    	if(isset($_POST['register_number']))
    	{
       		echo "<td>".$_POST['register_number']."</td>";
	}
	
	echo "</tr>";
	
	echo "</table>";
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        
        <form action="code.php" method="post">
            <input type="radio" id="approve" name="btn" value="Approve">
			<label for="approve">Approve</label><br>
			<input type="radio" id="reject" name="btn" value="Reject">
			<label for="reject">Reject</label><br><br>&emsp;&emsp;
			<input type = "submit"id="submit"name = "submit"value="submit">
            </form>
	</body>
</html>