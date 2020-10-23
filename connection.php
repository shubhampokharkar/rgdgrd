<?php
$conn = null;

$conn = new mysqli('localhost','root','','dance');

if($conn->connect_error)
{
    die('error in connecting database' . $connect->connect_eroor);
}
else{
    echo "connection succesfull";
}

?>