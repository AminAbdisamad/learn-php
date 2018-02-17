<?php
$loggedIn = true;
$users = ['name'=>'Aminux','country'=>'Somalia','Student'=>true,'Age'=>27];
// if($loggedIn){
//     echo "You're logged in";
// }else{
//     echo "You're NOT logged In";
// }
//echo ($loggedIn)?"You're logged In":"You're not logged In";

$isRegistered = ($loggedIn == true) ? true:false;
echo $isRegistered;

$age = 20;
$score = 15;
// if($score >10 && $age >10){
//     echo 'Your Score is Average';
// }elseif($score >=10 && $age <=10){
//     echo 'Your score is Exceptional';
// }elseif($age >10 AND $score <10){
//     echo 'Your score is horibble';
// }else{
//     echo 'Your score is Average';
// }
/*
echo 'Your score is '.($age<10 && $score >10) ? 'Exceptional ' :($age >10 && $score >10) ? 'Average' : ($age > 10 || $score <10 )? 'Horrible':'average'; */


#short hand Nested IF
echo ' Your score is: '.($score >10 ? ($age >10 ? 'Average': ' Exceptional
'): ($age >10 ? 'Horrible':'Average'));
?>

<div>
    <!-- Longway of doing it --> 
<?php if($loggedIn) { ?>
    <h1>Welcome User </h1>

<?php } else { ?>
    <h1>Welcome Guest </h1>
<?php } ?>
<!-- ends here -->
<?php if($loggedIn): ?>
    <h1>Welcome User </h1>
<?php else: ?>
    <h1>Welcome Guest </h1>
<?php endif?>
</div>
<div>
    <h1>User Information</h2>
    <ul><?php foreach($users as $user =>$value): ?>
        <li><h3> <?php echo $user.' : '.$value?> </h3></li>
    <?php endforeach; ?>
    </ul>
    <ul>
        <?php for($i = 0; $i<10; $i++): ?>
        <li> <?php echo $i; ?></li>
        <?php endfor;?> 
    </ul>
</div>
<!-- shortway of doing it -->
