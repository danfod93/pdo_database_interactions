<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);
        
        // Option 1: Pass the parameters in an array
        // $parameters = array(
        //     ":username" => $username,
        //     ":pwd" => $pwd,
        //     ":email" => $email
        // );
        // $stmt->execute($parameters);
        
        // OR
        
        // Option 2: Bind the parameters individually
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header('Location: ../index.php');

        /* In production environments, it is a common practice
        not to display error messages directly from PDO.
        It can expose sensitive information to users
        and pose security risks.
        Instead, you can use a variable (e.g., a boolean or integer)
        to track the success or failure of the operation and display
        a user-friendly message based on that variable. */

        // if ($stmt->execute()) {
        //     echo "You signed up :)";
        // } else {
        //     echo "Something went wrong :( Try again or contact us.";
        // }

        die(); // If you run a script with a connection inside of it
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}