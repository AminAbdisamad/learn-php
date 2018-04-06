<?php

// a constructor is a method that runs every time you instantiate an object 

class Users{
    public $name;
    public $age;
    public function __construct($name,$age){
        echo 'Class '.__CLASS__.' Instantiated <br>';
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHi(){
        return $this->name.' Says Hello';
    }
    // used for cleaining up and closing connections
    public function __destruct(){
        echo 'destruct run...';
    }

    
}

$user1 = new Users('Aminux',27);
echo $user1->name.' is '.$user1->age.' years old';
echo '<br>';
echo $user1->sayHi();
echo '<br>'
?>
