<?php

$data=array(array(2,3,4,5,6),
array(2,3,4,5,6),
array(2,3,4,5,6),
array(2,3,4,5,6)
);


//lets print the values of arrays using nested loops 


for($i=0;$i<count($data);$i++){

    for($j=0;$j<count($data[$i]);$j++){
   
        echo ' '.$data[$i][$j].' ';
    }
    echo "<br>";
}