<?php
$n1 = 0;
$n2 = 1;
echo $n1;
echo "<br>";
echo $n2;
echo "<br>";
for($i= 0;$i<19;$i++){
	$ans  = $n1+$n2;
	echo $ans;
	echo "<br>";
	$n1 = $n2;
	$n2 = $ans;
}
 ?>
