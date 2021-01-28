<?php
$namaHost = "sql102.epizy.com";
$username = "epiz_27467156";
$password = "OWcMzbJukS";
$database = "epiz_27467156_dbwasto";

$connect = mysqli_connect($namaHost, $username, $password, $database);
if ($connect) {
} else {
    echo "" . mysqli_connect_error();
}
?>