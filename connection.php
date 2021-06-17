<?php

    $con=mysqli_connect('localhost','root','','project');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>