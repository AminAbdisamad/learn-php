<?php
/** Object Oriented Programming 
 * 
*/
class person{ //methods functions inside class
    //public $name;
    //public $email;
    private $name;
    private $email;

    //constructor
    
    public function __construct ($name,$email){
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__.' created<br>';


    }
    //deconstructor
    public function __destruct (){
        
        echo __CLASS__.' Destropyed<br>';


    }

    //Name
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    //Email
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
}
//$person1 = new person;
$person1 = new person('Hassan','hassan@gmail.com');
//name
//$person1->setName('Amin');
echo $person1->getName().'<br>';
//email
//$person1->setEmail('Amin@gmail.com');
echo $person1->getEmail().'<br>';

class customer extends person{
    private $balance;
    public function __construct($name,$email,$balance){
        $this->balance = $balance;

        parent::__construct($name,$email,$balance);
        echo 'A new '.__CLASS__.' has been created';

    }
    public function setBlance($balance){
        $this->blance = $blance;
    }
    public function getBlance($balance){
        return $this->blance;
    }

}
$customer1 = new customer('Aminux','MNUX@gmail.com','10');
echo $customer1->getBlance();


?>