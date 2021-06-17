<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
		session_start();
		$register_number = $_SESSION['User'];
        $conn = mysqli_connect("localhost", "root", "", "project");
        
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

	//$register_number = $_REQUEST['register_number'];
        $fromdate =  $_REQUEST['fromdate'];
        $todate = $_REQUEST['todate'];
        $reason =  $_REQUEST['reason'];
        
        $sql = "INSERT INTO data VALUES ('$register_number', '$fromdate', '$todate', '$reason')";  
        if(mysqli_query($conn, $sql)){
            echo "<h3>Please wait for approval.</h3>"; 
        } else{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
          
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>