<?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
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
    <h2>Thank you, <?php echo $name ?> for subscribing to our website with your email <?php echo $email?></h2>
    <p><a href="page3.php">Go to next page </a></p>
</body>
</html>