<?php 
$mysqli = new
mysqli("localhost","root","","penjualan_db");

// check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connection MYSQL : " . $mysqli -> connection_error;
    exit();
}
?>