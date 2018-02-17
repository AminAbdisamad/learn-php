<?php
/** COOKIE- setcookie('cookieName',$Value,expireTime) */
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    setcookie('magaca',$username,time()+3600);
    header("location: page2.php");
}else{
    //echo "cookie not found";
};

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
        <input type="text" name="username" placeholder="username">
        <button type="submit" name="submit"> Send</button>
   </form>
</body>
</html>