<?php
for($j=2;$j<=20000000  ;$j++){
	for($i=2;$i<$j;$i++){
		if($j%$i==0){
			break;
		}
	}
	if($i==$j){
		echo $i."<br>";
	}
}

 ?>