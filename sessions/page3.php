<?php 
    session_start();
    
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : $_SESSION['name']='Guest';
    $email =isset($_SESSION['email']) ? $_SESSION['email']:$_SESSION['email']='guest@gmail.com';
    print_r($_SESSION);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
    <h3> Welcome back <strong style="color:blue;"><?php echo $name ?></strong> I'ts been a long time since we seen are you still using <strong style="color:blue;"><?php echo $email ?> </strong>email </h3>
</body>
</html>