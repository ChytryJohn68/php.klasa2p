<?php
$servername = "localhost";
$username = "chalupka";
$password = "monitor123";
$db = "chalupka";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  ?><p>Nie połączono</p><?php
} else {
  ?><p>Połączono</p><?php
}
?>