<?php
session_start();
$user = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p><?php
    echo "Du er nu logget ind som $user->username"
    ?></p>

</body>
</html>
