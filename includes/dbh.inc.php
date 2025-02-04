<?php

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$password = ""; // on mac you may need to use root on xamp

// You can use this line alone or with try catch
// $pdo = new PDO($dsn, $dbusername, $password);

try {
    // pdo = PHP Data Objects
    $pdo = new PDO( $dsn,  $dbusername, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
