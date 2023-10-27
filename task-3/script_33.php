<?php
$cities = array("France"=>"Paris", "India"=>"Mumbai", "UK"=>"London", "USA"=>"New York");
if(array_key_exists("france",$cities)){
	echo "The key 'France' is exists in the cities array";
}
else{
	echo "key does not exists";
}
?>