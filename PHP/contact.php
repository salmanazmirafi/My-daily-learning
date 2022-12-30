<?php
if(isset($_POST['btn'])){
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
<span>Username: <?php echo $username ?></span><br/>
<span>Email: <?php echo $email ?></span><br/>
<span>Password: <?php echo $password ?></span><br/>
<br/>
<br/>
<br/>
</body>
</html>