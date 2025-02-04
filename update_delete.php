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
    <form action="includes/userupdate.inc.php" method="post">
        <h2>Change Account</h2>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Update</button>
    </form>
    <form action="includes/userdelete.inc.php" method="post">
        <h2>Delete Account</h2>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Delete</button>
    </form>
</body>

</html>