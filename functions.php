<?php


echo "Function in php <br>";

function avgMarks($array){
    $sum=0.0;
    $i=0;
    foreach($array as $value){
        $sum+=$value;
        $i++;
    }
    $avgm=$sum/$i;

    return $avgm;
}

 $marks=[33,54,34,64,24,54];

 $res=avgMarks($marks);

 echo "average marks are $res ";

?>