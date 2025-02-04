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
    <form action="includes/formhandler.inc.php" method="post">
        <h2>Signup</h2>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Signup</button>
    </form>
    <form action="search.php" method="post">
        <h2>Search for user:</h2><br>
        <input id="search" type="text" name="usersearch" placeholder="Search...">
        <button>Search</button>
    </form>

</body>

</html>