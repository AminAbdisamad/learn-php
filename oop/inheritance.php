<?php

class Users{
    protected $name = 'Aminux';
    protected $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
}
class Customers extends Users{
    private $balance;
    public function __construct($name,$age,$balance){
        parent::__construct($name,$age);
        $this->balance = $balance;
        
    }
    public function __get($property){
        if(property_exists($this,$property)){
            return $this->$property;
        }
    }
    public function pay($amount){
        return $this->name. ' paid $ '.$amount;
    }
}

//$user1 = new Users('Amin',27);
$customer1 = new Customers('Amin',25,200);
//echo $customer1->getBalance();
$customer1->__get('name');
echo '<br>';
//echo $customer1->getName();
