<?php

$connect = mysqli_connect("localhost", "root", "","online_voting_system") or die("connection failed");

if($connect){
    echo "connected";
}
else{
    echo "not connected";
}
?>