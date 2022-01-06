<?php
require "settings/init.php";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {


    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        header("Location: login.php?error=Brugernavn skal udfyldes");
        exit ();

    } else if (empty($password)) {
        header("Location: login.php?error=kodeord skal udfyldes");
        exit ();

    } else {
        $bind = [":username" => $username,
            ":password" => $password
        ];

        $sql = "SELECT * FROM users WHERE username=:username AND password=:password";

        $user= $db ->sql( $sql, $bind, true)[0];

        if (!empty($user)) {
            $_SESSION['user'] = $user;
            header("Location: log.php");
            exit ();
        }
    }
}
else{ header("HTTP/1.1 401 Unauthorized");

}

?>


<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Sign up</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/y7etbb6fgqruwg5o86t8eo2wywvvdlu54udfhebfjweavmfg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


</head>
<body class="userBod vh-100 ">

<form class="m-5 bg-gradient-primary" method="post" action="login.php" enctype="multipart/form-data">

<h1 class="col-12 col-md-6 m-auto"">Login på din bruger</h1>
<br>

<p class="col-12 col-md-6 m-auto""> Har du ikke allerede en bruger så kan du let <a href='userformular.php.'>oprette en.</a></p>
<br><br>

    <div class="col-12 col-md-6 m-auto">
        <div class="form-group">
            <input class="form-control text-primary" type="text" name="username" id="" placeholder="Skriv dit brugernavn" value="">
        </div>
    </div>

    <div class="col-12 col-md-6 m-auto">
        <div class="form-group">
            <input class="form-control text-primary" type="password" name="password" id="" placeholder="Skriv dit kodeord" value="">
        </div>
    </div>

    <br>
    <br>

    <div class="col-12 col-md-3 m-auto ">

        <button class="form-control btn btn-primary" type="submit" name="submit"  id="login" value="Login">Login</button>
    </div>

</form>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector: '#username'

    });
</script>
</body>
</html>
