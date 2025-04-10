<?php
        $servername = "localhost";
        $username = "chalupka";
        $password = "monitor123";
        $db="chalupka";        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);
        
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAZY DANYCH PHP</title>
</head>
<body>

</body>
</html>