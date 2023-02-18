<?php
$array = [1,12,36,45,25,78,69,46,32,18,75];
$search = 35;
$found = false;

foreach($array as $value){
    if($value == $search){
        $found = true;
        break;
    }
}
if($found){
    echo $search."is found in the array";
}
else{
    echo $search."is not found in the array";
}
?>