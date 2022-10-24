<?php

$host='db'; //service name from docker-compose.yml;
$user="devuser";
$pass="devpass";
$db="webapp";

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
echo 'Successfully connect to MYSQL';

?>
