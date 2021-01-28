<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "dbwasto";

$connect = mysqli_connect($namaHost, $username, $password, $database);
if ($connect) {
} else {
    echo "" . mysqli_connect_error();
}
?>