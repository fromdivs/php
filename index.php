<?php

$host='db'; //service name from docker-compose.yml;
$username='devuser';
$pass='root';
$db='webapp';

$conn = new mysqli($host,$usenamer,$password,$db);
if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
echo 'Successfully connect to MYSQL';

?>
