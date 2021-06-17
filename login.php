<?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Form</title>
</head>
<body>
	<div class="main">
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Login Form</h1>
	    <form action="process.php" method="post">
	    <input type="text" name="UName" placeholder=" User Name" class="form-control mb-3">
                    <input type="password" name="Password" placeholder=" Password" class="form-control mb-3">
                    <button class="btn btn-success mt-3" name="Login">Login</button>
            </form>
	 <div class="bottom">
                <input type="checkbox"name="remember"checked="checked">Remember me
                <a href="#">Forgot Password ?</a>
            </div>
        </div>
    
</body>
</html>