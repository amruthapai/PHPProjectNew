<?php

$conn = "";

try {
    $servername = "localhost:3306";
    $dbname = "loginPage";
    $username = "root";
    $password = "123";
    
    $conn = new PDO(
        "mysql:host=$servername; dbname=EMPLOYEE",
        $username, $password
        );
    
    $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

