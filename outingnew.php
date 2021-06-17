<?php
session_start();
//echo $_SESSION['User'];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="outing.css">
    </head>
<body>
<div class="main">
    <h1 style="color: rgb(245, 53, 53); font-size: 40px;">&emsp;&emsp;&nbsp;&nbsp;Student Outing Form</h1>
<form action = "insert.php" method = "post">
<!--<h1>&emsp;Register Number</h1> &emsp;&emsp;-->
<!--<input type = "text" id = "registerNumber" name = "register_number" placeholder = "Enter your register number">-->
<h1>&emsp;From Date &emsp;&emsp;&emsp;To Date</h1> &emsp;&emsp;
<input type="date" id="fromDate" name = "fromdate" value="yyyy-mm-dd"> &emsp;&emsp;&emsp;&emsp;&emsp;
<input type="date" id="toDate" name = "todate" value="yyyy-mm-dd">
<br><br>
<h1>&emsp;Reason</h1> &emsp;&emsp;
<input type="text" placeholder="Enter your reason" name = "reason" id="reason">
<br><br><br> &emsp;&emsp;
<button onclick="myFunction()">Submit</button>
</div>
</form>
<script>
function myFunction() {
  var reason = document.getElementById("reason").value;
  var fromDate = document.getElementById("fromDate").value;
  var toDate = document.getElementById("toDate").value;
  if(reason == null || reason == ""){
  	alert("Please enter reason");
  }
  if(fromDate == toDate || fromDate == "" || toDate == ""){
    alert("Please select correct date. One day is minimum for outing");
  }
  if(reason != null && reason != "" && fromDate != toDate){
      return true;
  }
}
</script>

</body>
</html>
