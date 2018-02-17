<?php

//stristr — Case-insensitive strstr()




$people [] = "Mohamed Amin Abdisamad";
$people [] = "Hassan Amin Abdisamad";
$people [] = "Cali  Abdisamad";
$people [] = "Hussein Cali";
$people [] = "Abdihalim Adam";
$people [] = "Omar Yusuf";
$people [] = "Mohad Moalim";

//Get query string
$q = $_REQUEST['q'];
$suggestion = '';

//Get suggestions
if(!empty($q)){
    $q = strtolower($q);
    $len = strlen($q);
    //loop $people array
    foreach( $people as $person ){
        if(stristr($q, substr($person,0,$len))){
            if($suggestion === ''){
                $suggestion = $person;
            }else{
                $suggestion.=' , '.$person;
            }

        }
    }
    // check stristr and pass $q ,substr 
}

echo $suggestion === ''? ' No suggestion' : $suggestion;


?>