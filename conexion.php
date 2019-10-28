<?php
$servername = "201.148.107.83";
$database = "aresm2m_desk";
$username = "aresm2m_programa";
$password = "@Ar35_m2M";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
