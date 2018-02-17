<?php 

/** $_SERVER SUPERGLOBAL
 * 
 * 
 * 
 */
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
];
//echo $server['Host Server Name'];
//echo $server['Host Header'];
//echo $server['Server Software'];
//echo $server['Document Root'];
//echo $server['Current Page'];
//echo $server['Script Name'];
//echo $server['Absolute Path'];
// print_r($server);

/** Client Array 
 * 
*/
$client = [
    'client Information' => $_SERVER['HTTP_USER_AGENT'],
    'client IP' => $_SERVER['REMOTE_ADDR'],
    'client Port' => $_SERVER['REMOTE_PORT']
];
//print_r($client);
?>