<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_search = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch ;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $user_search);

        $stmt->execute();

        // Fetch the results in an associative arrays from the DB
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">

</head>

<body>
    <div class="search_results_ctn">
        <h2>Search Result:</h2>

        <?php
        if (empty($results)) {
            echo '<div>';
            echo '<p>There were no results!</p>';
            echo '</div>';
        } else {
            foreach ($results as $row) {
                echo '<div>';
                echo '<h3>' . htmlspecialchars($row['username']) . '</h3>';
                echo '<p>' . htmlspecialchars($row['comment_text']) . '<p>';
                echo '<p>' . htmlspecialchars($row['users_id']) . '<p>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>

</html>