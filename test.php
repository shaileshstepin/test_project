<?php

$arr1 = [9,8,7,2,1,3,100,99,20,-20,-23,-1,21,34]; 

echo "<pre>";
var_dump($arr1);
echo "</pre>";

usort($arr1, function($a,$b){
    return ($a < $b) ? -1 : 1; 
});

echo "<pre>";
var_dump($arr1);
echo "</pre>";
