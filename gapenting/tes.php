<?php

$dir = "inc/img/";

$scan = scandir($dir);

/*
foreach ($scan as $key => $value) {
	echo $scan[$key]."<br />";
}
*/
for ($i=2; $i <= count($scan) - 1; $i++) { 
	echo "<li>".$scan[$i]."</li>";
}

?>