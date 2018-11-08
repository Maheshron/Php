<?php
/*
$arr = array(10,20,30,40,50,60,70,70);
$c = count($arr);
for($i = 0;$i<$c;$i++){
echo $arr[$i]."<br>";

}

$arr = array(
"name" => "mahesh",
"city" => "hyderabad",
"state" => "ts"
);
foreach ($arr as $key => $value) {
	echo $value;
	echo "<br>";
}
*/
/*$arr = array(2,12,1,3,7,3,4,5,1);
 sort($arr);
 print_r($arr);
 */
//$arr = array(10,20,30,40,50,60,70);
//echo array_product($arr);
/* ---- Is array Function ----------
$arr = array(10,"hello");
echo is_array($arr);
*/
/* ---------- Shuffle function----------- ----  */

//$arr = array(10,20,30,40,50,60,70,80,90,100);
//shuffle($arr);
//print_r($arr[0]);
/*
$a1 = array(10,20,30);
$a2 = array(100,200,300);
$fa = array_combine($a1, $a2);
print_r($fa);
echo "<br>";
$ac1 = array(10,20,30,40,50,60,70,80,90,100);
$ac2 = array(100,200,300,400,500,600,700,800,900,1000);
$fc = array_combine($ac1,$ac2);
print_r($fc);
*/
/*
$arr1 = array(10,20,30,40,50,60,70,80);
$arr2 = array(30,40);
$fc = array_merge($arr1,$arr2);
print_r($fc);
*/
/* array_unique 
$arr1 = array(10,20,30,40,10,60,70,10,90,100);
print_r(array_unique($arr1));

*/
/* ---------- In array ----------------*/
/*$arr = array(10,20,30,40,50,60,70,80,90,100);
echo array_key_exists(5, $arr);
*/
$arr = array(10,20,30,40,50,60);
array_unshift(50,$arr);

print_r($arr);

 
 ?>
  