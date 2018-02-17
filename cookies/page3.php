<?php
$user =[
    'name'=>'Mohamed',
    'email'=>'aminux@gmail.com',
    'age'=>27
];
$user = serialize($user);
setcookie('user',$user,time()+3600);
$user = unserialize($user);
echo $user['name'];
print_r($user);

?>