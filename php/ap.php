<?php  

include "dbconn.php";

$sql = "SELECT * FROM applied ORDER BY id DESC";
$result = mysqli_query($conn, $sql);