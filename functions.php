<?php 
#function - Block of code that can be re-used anytime

/**
 * Camel Case - functionName() *
 * Lower Case - my_function()
 * Pascal Case - MyFunction()
 */
function greeting(){
    echo 'Hello World';
}
//function call
// greeting();

//function with param
function sayHello($name ="Aminux"){
    echo "Hi, $name . How are you doing today!<br>";
}
// function call 
sayHello("Mohamed Amin");

//functioin that returns value
function addTwoNumbers($number1,$number2)
{
    return $number1 + $number2;
}




// function by reference 

$mynum = 10;
//by value
function addFive($num){
    return $num +=5;
} //by reference
function addTwentry(&$num){
    return $num +=20;
}
addFive($mynum);
echo "mynum Value: $mynum <br>";
addTwentry($mynum);
echo "mynum value: $mynum";



?>