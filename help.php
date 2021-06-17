<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="help.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>HELP</title>
</head>
<body>
        <div class="box">
            <h2>QUERY BOX...</h2>
            <form action="#">
                <input type="text"name="full_name"placeholder = "Enter your registration number..."><br><br>
                <textarea name="comments"placeholder="Any Query...?"></textarea>
                <button onclick="msg();">Post Your Query</button>
            </form>
        </div>
        <script>
            function msg(){
                swal("Thank You!! In Soon We Will Answer You..!!");
            }
        </script>
</body>
</html>
