<?php

echo $_GET["name"]."<br>";
echo $_GET["description"]."<br>";
$arr=$_GET["tags"];
foreach ($arr as $s){
	if($s!="0")
		echo $s;
	}
echo $_GET["incentives"];
echo $_GET["filename"];

?>
