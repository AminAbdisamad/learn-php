<?php 
#Loops: Execute code set number of times 
/***
 *  1. For loops
 * 2. While loops
 * 3.Do .. While loops 
 * 4. Foreach 
 
 */

 /** 1. For Loop
 * Use if you know the number of times to be executed 
 * @params - init, condition, increment
  */
//   $name = "Aminux";
//   $lang = "php";
// for ($i = 0; $i<10;$i++){
//     echo "Hi, $name I miss you so much I'm learning $lang right now";
//     echo "<br>";
// }

/**
 * in javascript you create a while loop like this 
 * let counter = 0;
 * while(counter <10 ){
 * console.log(counter);
 * }
 */

 /** 2. while loop */
//  $counter = 0;
//  while($counter < 10 ){
//      echo "This is a while loop";
//      echo '<br>';
//      $counter ++;
//  }



 /** 3. Do while loop */
//  $i =0;
//  do {
//      echo "Hello there";
//      echo '<br>';
//      $i++;
//  }while($i<10)

/** 4. ForEach */
#looping Indexed array
$Shaqaalaha = ['Cabdi','Xuseen','Layla','Mahdi','Jaamac','Ifiye'];
foreach($Shaqaalaha as $shaqaale){
    echo $shaqaale;
    echo '<br>';
}
# looping Associative array
$Shaqaalaha = array ('Cabdi'=>'cabdi@gmail.com','Xuseen'=>'zus@gmail.com','Layla'=>'Ag@gmail.com','Mahdi'=>'mahdi@gmail.com','Jaamac'=>'jaamac@gmail.com','Ifiye'=>'ifiye@gmail.com');
foreach($Shaqaalaha as $shaqaale => $mail){
    echo $shaqaale.' :'.$mail;
    echo '<br>';
}

?>