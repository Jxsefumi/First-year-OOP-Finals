<?php
$con = mysqli_connect("localhost", "Order", "Order@123!", "order1");

if(!$con){
    die("Connection Failed". mysqli_connect_error());
}

?>