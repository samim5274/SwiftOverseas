<?php

$server = "localhost";
$username = "root";
$pass = "";
$database = "swdb";

$conn = mysqli_connect($server,$username,$pass,$database);

if(!$conn)
{
    die("Connection failed: ".$conn->connection_error);
}

?>