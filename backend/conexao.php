<?php
$servername = "mysql-connection";
$username = "root";
$password = "123456";
$database = "meubanco";


$link = new mysqli($servername, $username, $password, $database);


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
