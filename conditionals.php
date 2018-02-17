<?php 
/*** Conditional 
 * ------------- *
 *  == (Equal)
 *  === (Equal for both value and datatype)* 
 *  < (less than)
 *  > (greater than)
 * <= (Less than or equal)
 * >= (greater than or equal)
 * != (Not Equal to)
 * !== (Not Identical)
*/
// $num = 10;
// if($num == 10){
//     echo "$num is equal to 10";
// }else{
//     echo "$num is not equal to 10";
// }
# Nested IF
// $num = 1;
// if($num <7){
//     if($num > 0){
//         echo "$num is passed";
//     }
// }else{
//     echo "$num didn't pass";
// }
/** Logical Operators
 *  and &&
 * or ||
 * XOR (Exclusive OR) One of them has to be true not both
 * 
 */


//  $num = 50;
//  if($num > 0 XOR $num < 10){
//      echo "$num has passed";
//  } else {
//      echo "$num couldn't pass";
//  }


 #SWITCH

$favColor = 'White';
switch($favColor){
    case 'Red':
        echo "Your Fav color is $favColor";
        break;
    case 'Blue':
        echo "Your Fav color is $favColor";
        break;
    case 'Green':
        echo "Your Fav color is $favColor";
        break;
    Default:
        echo "Your Fav color is something else";
      
}
?>