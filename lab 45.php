<?php
// make file
$filename="file1.txt";
// $file=fopen($filename,"w");
// if ($file==false) {
//     echo"error";
//     exit();
// }
// // write file
// fwrite($file,"helooo file_handling");
// fclose($file);


//read file
$file=fopen($filename,"r");
if ($file==false) {
    echo"error";
    exit();
}
$filesize=filesize($filename);
$filetext=fread($file,$filesize);
fclose($file);
echo "$filetext"."<br>";
?>