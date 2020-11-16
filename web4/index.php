<?php
	setcookie("Auth", "ok Reven", time()+3600 , '/' );
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>

    <form action="loggedin.php" method="">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="submit" name="cookie">
    </form>
</body>
</html>