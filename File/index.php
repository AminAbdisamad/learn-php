<?php
/** File functions
 * 
 */
$path = '/dir1/myfile.php';
echo basename($path,'.php').'<br>'; // getting the file  
echo dirname($path).'<br>';
$file = 'file1.text';
echo file_exists($file).'<br>'; // returns file and folder both

echo realpath($file).'<br>'; //returns full path 

//check if exist
echo is_file($file).'<br>'; // only returns file not folders 

echo is_writable($file);
echo is_readable($file).'<br>';
//get file size;
echo 'this file is ' .filesize($file).' bytes <br>';

//create directory
echo mkdir('Dir1');
mkdir('Dir1');
# TO BE CONT ... 

?>