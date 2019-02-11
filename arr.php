<?php
$ice_cream["good"] = "orange";
$ice_cream["better"] = "vanilla";
$ice_cream["best"] = "rum raisin<br>";

extract($ice_cream);

echo $good;
echo $better;
echo $best;

$a1=array("a"=>"red","b"=>"green","c"=>"blur","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a2,$a1);
print_r($result);
$result=array_diff($a1,$a2);
print_r($result);

$a1=array("a"=>"red","b"=>"green","c"=>"blu","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);

?>