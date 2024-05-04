<?php


// simple for loop 

$data = array("jumair","hameed","haleeb","heellal","ijlal");

// lets traverse this array using while loop to print the data in it 


echo "while loop <br>";
$i=0;
while($i<5){
    echo $data[$i];
    echo "<br>";
    $i++;

}


echo "using for loop ";


for ($i=0;$i<5;$i++){
    echo $data[$i];
    echo "<br>";

}

echo "using for each loop";

foreach($data as $value){
    echo $value;
    echo "<br>";
}