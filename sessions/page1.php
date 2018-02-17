
<?php
 session_start();

if(isset($_POST['submit'])){
   
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);
    header("location:page2.php");
     

}

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
   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" placeholder="Magacaaga">
        <input type="text" name="email" placeholder="emailkaaga">
        <button type="submit" name="submit"> Send</button>
   </form>
</body>
</html>