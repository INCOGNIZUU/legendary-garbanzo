<?php
if(!isset($_COOKIE["Auth"])) {
  echo "Cookie named '" ."Auth" . "' is not set!";
} else {
  echo "Cookie '" . "Auth" . "' is set!<br>";
  echo "Value is: " . $_COOKIE["Auth"];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>


    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>