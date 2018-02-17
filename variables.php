<?php
//Single line comment 
# Another Single Line comment
/** 
 * Multiple Line comment 
 * 
*/

/** VARIABLE 
 * ---------
 * 1. $ prefix - It should start with $ otherwise it will be constant
 * 2. Only letters, numbers and underscore
 * 3. Case sensitive
*/

/** DATA TYPES 
 * ----------
 * 1.Strings
 * 2.Integer
 * 3.Float
 * 4.Bolean
 * 5.Arrays
 * 6.Objects
 * 7. Null
 * 8.Resource
*/
// string
$name = "Mohamed A. Abdisamad";
//integer
$age = 27;
//float
$height = 1.76;
//bolean
$married = false;
$educatoan_level = "Masters";
$field = "Computer Engineering";
$country = "Somalia";
//escape string
$escape = 'They\'re here';

//$output = "Welcome to My profile";
//print("Welcome to my profile My Name is ".$name." I'm ".$age." from ".educatoan_level);
echo "Hi $name How are you doing today, I heard that you are $height now, congretulations you are tall now, that's a joke you said you are from $country and you have $educatoan_level degree in $field
so how can $age years old has $married married\n";

/** Defining constants
 * 1. const should be UPPERCASE
 * 
 * 
 * 
 */
define('GREETING','Hello there PHP Learners !',true);
echo greeting;






?>