<?php 
/** Date function in php
 * 
 * 
 * 
 * 
 */
//echo date("l "); // gives day of the week
//echo date("d.m.y");
// echo date("h:"); //hour
// echo date("i:"); //Minute
// echo date("s"); //Seconds
// echo date("a"); // AM or PM






//Set timeZone

date_default_timezone_set('Europe/Istanbul');
//echo date("h:i:sa");

// $bornTime = mktime(9, 30, 43,10,10,1990);
// echo $bornTime.'<br>';
// echo date("h:i:s a d-m-Y ",$bornTime); //
$timestamp = strtotime('tomorrow');
$timestamp1 = strtotime('yesterday');
$timestamp2 = strtotime('next wednesday');
$timestamp3 = strtotime('+40 years');
//echo date('h:i:s a d-m-Y',$timestamp);
echo date('h:i:s a d-m-Y',$timestamp3);

?>