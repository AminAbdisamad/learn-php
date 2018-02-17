<?php
//updating cookie
setcookie('magaca','Aminux',time()+86400);
//deleting cookie
setcookie('magaca','Aminux',time()-3600);

// if(count($_COOKIE)){
//     echo 'there are '.count($_COOKIE).' cookies saved';
// }else{
//     echo "there are no cookies";
// }
echo (count($_COOKIE)) ? 'there are '.count($_COOKIE).' cookies found <br>' : 'there are no cookies found <br>';
if(isset($_COOKIE['magaca'])){
    $username =$_COOKIE['magaca'];
    echo $username.' is set';
    
}else{
    echo "username is not set";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session test</title>
</head>
<body>
    
</body>
</html>