<!--
Date	
 -->
<?php
echo date_default_timezone_set("Asia/Kolkata");
$date = "28-03-1996";
echo date(l,strtotime($date));
 ?>