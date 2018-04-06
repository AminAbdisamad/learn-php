<?php 
//create class users 
class Users{
    // inside the class there are properties and methods
    // properties are the attributes of the class 
    // Methods are the functions inside the class that do specific thing.
    //public $name = 'Aminux';
    public $name;

    public function sayHello(){
        return $this->name.' says Hello';
    }
    
  
}
$user1 = new Users();
$user1->name ="Aminux";
echo $user1->name;
$say = new Users();
$say->name = 'Hassan';
echo '<br>';
echo $say->sayHello();
