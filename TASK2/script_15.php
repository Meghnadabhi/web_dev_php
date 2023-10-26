<?php
$a=15;
$b=5;
$c=100;
if($a>$b){
	if($a>$c){
		echo("a is the largest!");
	}
	else{
		echo("c is the largest!");
	}
}
elseif($b>$c){
	echo("b is the largest!");
	
}
else{
	echo("c is the largest!");
}	
?>