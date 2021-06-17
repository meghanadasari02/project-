<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `data` WHERE CONCAT(`register_number`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `data`";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "project");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="" method="post"align="center">
            <input type="text" name="valueToSearch" placeholder="Enter from date to search"><br><br>
			<input type="text" name="valueToSearch" placeholder="Enter register number to search"><br><br>
            <input type="submit" name="search" value="SEARCH"><br><br>
            </form>
            <table align = "center">
                <tr>
                    <th>Register Number</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Reason</th>
					<!--<th>Status</th>-->
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <form action = "userdetails.php" method = "post">
					
					<td><input type = "submit" name = "register_number" value = "<?php echo $row['register_number'];?>"></td>
					</form>
                    <td><?php echo $row['fromdate'];?></td>
                    <td><?php echo $row['todate'];?></td>
                    <td><?php echo $row['reason'];?></td>
					<!--<td><?php echo $row['status_approval'];?></td>-->
                </tr>
                <?php endwhile;?>
            </table>
    
        
    </body>
</html>