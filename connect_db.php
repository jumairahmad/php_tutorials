<?php


echo "connecting to database <br>";

$sname="localhost";
$uname="root";
$pass="";

$conn=mysqli_connect($sname,$uname,$pass);

if (!$conn){
    echo "cant connect to db error <br>";
}else {
    echo "connected to db successfully <br>";
}