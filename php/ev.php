<?php  

include "dbconn.php";

$sql = "SELECT * FROM host ORDER BY id DESC";
$result = mysqli_query($conn, $sql);