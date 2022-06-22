<?php

// $myfile = fopen("new.txt", "r") or die("Unable to open file!");
// echo fread($myfile, filesize("new.txt"))."<br>";



$myfile1 = fopen("new.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while (!feof($myfile1)) {
    echo fgets($myfile1) . "<br>";
}
fclose($myfile1);




$myfile1Write = fopen("new.txt","w");
$text1 = "From php file heading 1\n";
fwrite($myfile1Write,$text1);

$text2 = "From php file heading 2\n";
fwrite($myfile1Write, $text2);
fclose($myfile1Write);


$myfile1Write = fopen("new.txt", "a");
$text3 = "From php file heading 3\n";
fwrite($myfile1Write, $text3);
echo "<br>";
$text4 = "From php file heading 4\n";
fwrite($myfile1Write, $text4);


$text5 = "From php file heading 5\n";
fwrite($myfile1Write,$text5);


$myfile1Write = fopen("new.txt", "a");
$text6 = "From php file heading 6\n";
fwrite($myfile1Write, $text6);

fclose($myfile1Write);



?>