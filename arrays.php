<?php
/** Arrays
 * ------
 * Array is a variable that holds multiple values 
 * 
 * 3 tpes of arrays
 * ----------------
 * 1. Indexed
 * 2. Associative
 * 3. Multi-dimentional 
 */

            /** 1. Indexed Array 
             * *****************/
// array of strings
 $people = array('Abdihalim','omar','Amin');
 //echo $people[2];
 // array of numbers
 $numbers = array(12,23,45,56);
 #echo $numbers[0];
// array of regions 
$regions = ['Benadir','Bay','Bakool','Gedo','Galgaduud','Mudug'];
// Adding New Item though index
$regions[6] = "Hiiraan";
// Adding new Item without Index
$regions[] = 'Shabeelada Hoose';
$regions[] = 'Shabeelada Dhexe';
$regions[8];

// Array functions 
#echo count($regions); // number of items in the array
#print_r($regions); // displays the whole body of the array and its items
#var_dump($regions); // function for debuging 


                /** 2. Associative Array 
                 * *****************/

$users = array('Name'=>'Amin Abdisamad','name'=>27,"country"=>"Somalia");
//echo $associative['Age'];
$users['Study']='Computer';
// print_r($users);

$ids = [22 =>'Alex',35=>'Halima Kawan',40=>"Amin"];
$ids[34]="Aminux";
// var_dump($ids);



  /** 3. Multi-dimentional  Array 
                 * *****************/


// $cars = array(
//     array("honda",20,30),
//     array('toyota',33,22),
//     array('BMW',56,67)
// );
$cars = [ 
["honda",20,30],
['toyota',33,22],
['BMW',56,67] 
];

$cars[0][3] = "Not honda";
$cars[1][3] = "Not Toyota";
$cars[2][3] = "Not BMW";

print_r($cars);

//TODO: Removing arrays and playing with it  










?>