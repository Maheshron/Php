<?php 
// $fp = fopen("h1.txt","r");
// $s = filesize("h1.txt");
// echo fread($fp, $s);
// //$fp = fopen("h1.txt","r");
// // echo fread($fp,100);
// $fo = fopen("h1.txt","w");
// echo fwrite($fo,"mahesh kumar king of nothing");
// $fp = fopen("h1.txt", "r");
// for(;$line = fgets($fp);){
// 	echo $line;
// 	echo "<br>";
// }
// $fp = fopen("h1.txt","r");
// for(;$line = fgets($fp);){
// 	echo $line;
// 	echo "<br>";
// }
// $fp = fopen("h1.txt","r");
// for(;$line = fgetss($fp);){
// 	echo $line ;
// 	echo "<br>";
// }

date_default_timezone_set("Asia/Kolkata");
echo date("l dS m Y h:m:s ",filemtime("h1.txt"));

?> 