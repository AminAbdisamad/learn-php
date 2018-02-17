<?php 
/** Validate filters
 * -------------------*
 * 1. FILTER_VALIDATE_BOOLEAN - Returns TRUE for "1", "true", "on" and "yes". Returns FALSE otherwise.
 * 2. FILTER_VALIDATE_EMAIL - Validates whether the value is a valid e-mail address.
 * 3. FILTER_VALIDATE_FLOAT - Validates value as float, and converts to float on success.
 * 4. FILTER_VALIDATE_INT - Validates value as integer, optionally from the specified range, and converts to int on success.
 * 5. FILTER_VALIDATE_IP - Validates value as IP address, optionally only IPv4 or IPv6 or not from private or reserved ranges. 
 * 6. FILTER_VALIDATE_MAC - Validates value as MAC address.
 * 7. FILTER_VALIDATE_REGEXP - Validates value against regexp, a Perl-compatible regular expression.
 * 8. FILTER_VALIDATE_URL - Validates value as URL


 */

 /** Sanitize filters 
 * -------------------*
 * 1. FILTER_SANITIZE_EMAIL - Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].
 * 2. FILTER_SANITIZE_ENCODED - URL-encode string, optionally strip or encode special characters.
 * 3. FILTER_SANITIZE_NUMBER_FLOAT - Remove all characters except digits, +- and optionally .,eE.
 * 4.FILTER_SANITIZE_NUMBER_INT - Remove all characters except digits, plus and minus sign.
 * 5.FILTER_SANITIZE_SPECIAL_CHARS - HTML-escape '"<>& and characters with ASCII value less than 32, 
 *                              optionally strip or encode other special characters.
 * 6. FILTER_SANITIZE_FULL_SPECIAL_CHARS - Equivalent to calling htmlspecialchars() with ENT_QUOTES set.
 * 7.FILTER_SANITIZE_STRING - Strip tags, optionally strip or encode special characters.
 * 8. FILTER_SANITIZE_STRIPPED -Alias of "string" filter.
 * 9.FILTER_SANITIZE_URL - Remove all characters except letters, digits and $-_.+!*'(),{}|\\^~[]`<>#%";
 * 10.
 


 */
//Check for posted data
if(filter_has_var(INPUT_POST,'data')){
    //echo "Data has found";
}else{
    //echo "data has NOT found";
}

// Validate email
// if(filter_has_var(INPUT_POST,'data')){
//     if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
//         echo "Email is valid";
//     }else{
//         echo "Email is not valid";
//     } }


// Validate email
if(filter_has_var(INPUT_POST,'data')){
    // sanitize email
    $email = $_POST['data'];
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    //echo $email.'<br>';
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        //echo "Email is valid";
    }else{
        //echo "Email is not valid";
    } }


//validating numbers 
$var = 'xalima';
if(filter_var($var,FILTER_VALIDATE_INT)){
   // echo $var.' is a number'.'<br>';
}else{
   // echo $var.' is NOT a number';
}
//Sanitizing numbers 
$num = 'x78zx8d7879d0daa0sasad6s6dsds454s4sd9sd09ss4a3s3/./.65.6/5.6/878/3./4.34343hjkh';
//var_dump(filter_var($num,FILTER_SANITIZE_NUMBER_INT));//{
   //echo $var.' is a number'.'<br>';
//}else{
   //echo $var.' is NOT a number';
//}

//validating IP address 
$Ip = '292.168.0.255';
if(filter_var($Ip,FILTER_VALIDATE_IP)){
   // echo $Ip.' is a valid IP'.'<br>';
}else{
   // echo $Ip.' is NOT a valid IP';
}
//validating IP URL 
$URL = 'www.asalsolutions.com';
if(filter_var($URL,FILTER_VALIDATE_URL,273)){
    //echo $URL.' is a valid URL'.'<br>';
}else{
    //echo $URL.' is NOT a valid URL';
}
//FILTER_SANITIZE_SPECIAL_CHARS 
$script = '<script>alert("I love PHP")</script>';
$clean= (filter_var($script,FILTER_SANITIZE_SPECIAL_CHARS));
//echo $clean;
//var_dump(filter_var($num,FILTER_SANITIZE_NUMBER_INT));

$filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    )
        );
//print_r(filter_input_array(INPUT_POST,$filters));

$user = array(
    'name' => 'mohamed amin abdisamad',
    'age' =>'27',
    'email' => 'aminux@gmail.com'
);
$userFilter = array (
    'name' => array(
        "filter"=>FILTER_CALLBACK,
        "options" => "ucwords"
    ),
    'age' => array(
        'filter' => FILTER_VALIDATE_INT,
        'options' => array(
            'min_range'=> 1,
            'max_range'=>120
        )
    
    ),
 'email' => FILTER_VALIDATE_EMAIL
);
print_r(filter_var_array($user,$userFilter));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>

</form>
    
</body>
</html>