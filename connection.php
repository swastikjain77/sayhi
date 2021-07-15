<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "hyn";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn){
    echo "done";
}else{
    echo "failed";
}


?>