<?php

$server = "localhost";
$username = "root";
$pass = "";
$database = "swdb";

// $server = "localhost";
// $username = "swiftove_samim";
// $pass = "mys$6)Yen_;u";
// $database = "swiftove_swdb";

$conn = mysqli_connect($server,$username,$pass,$database);

if(!$conn)
{
    die("Connection failed: ".$conn->connection_error);
}

?>