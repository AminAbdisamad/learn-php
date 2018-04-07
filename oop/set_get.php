<?php 
class users {
    private $name;
    private $age;
    private $tell;
    public function __construct($name,$age,$tell){
        $this->name = $name;
        $this->age = $age;
        $this->tell = $tell;
    }

    //set  getter
    public function getName(){
        return $this->name;
    }
    //set Name
    public function setName($name){
        return $this->name = $name;
    }
    //__get magic
    public function __get($property){
        if(property_exists($this,$property)){
            return $this->$property;
        }

    }
    // __set magic method

    public function __set($property,$value){
        if(property_exists($this,$property)){
            $this->$property = $value;
        }
        return $this;
    }
}


$user1 = new Users('Amiin',27,646464);
// $user1->setName('Ali');
// echo $user1->getName();
$user1->__set('tell',24232);
echo $user1->__get('tell');











?>
