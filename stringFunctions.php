<?php 
/** Substr()  - Returns a portion of a string
 * 
*/
$str = substr("Hello World",5);
//echo $str;

/** strlen()  - Returns lenght of a string
 * 
*/
$strl = strlen("Hello, How are you doing today");
//echo $strl;

/** strpos()  - Finds the postion of the first occurence of a sub string
*/
$strs = strpos("HI, welcome back",'w');
//echo $strs;

/** strrpos()  - Finds the postion of the Last occurence of a sub string
*/
$strrs = strrpos("HI, welcome back",'w');
//echo $strrs;

/** trim()  - strips the white spaces
*/
$text = 'Welcome     back      my   friend                       ';
//var_dump($text);
$whitespace = trim($text);
//var_dump($whitespace);

/** Strtoupper - makes everything uppercase
 * 
 */
$output = strtoupper("hello world, i'm new to this");
//echo $output;

/** Strtoupper - makes everything uppercase
 * 
 */
$sText = strtolower("hello world, i'm new to this");
//echo $sText;

/** ucwords() - Capilalizes words  */
$uText = ucwords("hello world, i'm new to this");
//echo $uText;

/** str_replace - replace all occurences of a search string with
 * a replacement
 */
$otext = 'Hi, amin how are you doing today';
$rText = str_replace('amin','aminux',$otext);
echo $rText;
$rTextCap = ucwords($rText);
echo $rTextCap;

/** is_string() - checks string 
 * returns 1 if true or nothing
*/
$thstr = is_string($rTextCap);
echo $thstr;


/** gzcompress - compress string */

// $secret = "";
// $cs = gzcompress($string );
// echo $cs;



?>