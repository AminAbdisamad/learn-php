<?php 

/** htmlentities is very handy when it come to basic security of php  
 * 
 * ex1. $name = htmlentities($_GET['name']);
*/
/** GET Method - data will be sent through the URL
 * 
 * 
*/
if(isset($_GET['name'])){
    $name = htmlentities($_GET['name']);
   // $email = htmlentities($_GET['email']);
    // echo $name;
    // echo $email;
}
#POST Method  - Data will be sent through the headers 
/*
if(isset($_POST['magaca'])){
    $name = htmlentities($_POST['magaca']);
    $email = htmlentities($_POST['emailka']);
    echo " My Name is $name <br>";
    echo "My Email is $email";
    print_r($_POST)
}
*/
/** Request 
 * 
 * */
/*if(isset($_REQUEST['magaca'])){
    $name = htmlentities($_REQUEST['magaca']);
    $email = htmlentities($_REQUEST['emailka']);
    echo " My Name is $name <br>";
    echo "My Email is $email";
    print_r($_REQUEST);
} */

//echo $_SERVER['QUERY_STRING'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name">
        <label for="name">Email: </label>
        <input type="text" name="email">
        <input type="submit" value="submit">
    </form>
    <ul>
        <li> <a href="form.php?name=Aminux"> Aminux</a></li>
        <li> <a href="form.php?name=Abdihalim"> Abdihalim</a></li>
    </ul>
   <h1> <?php echo "{$name}'s Profile"; ?> </h1>
</body>
</html>