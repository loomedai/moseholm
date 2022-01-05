<?php
require "settings/init.php";


if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;



    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $bind = [":username" => $data["username"],
        ":email" => $data["email"],
        ":password" => $data["password"],

    ];

    $db ->sql( $sql, $bind, false);
    echo "<a href='index.html'>Se dit abonnoment</a>";
    exit;
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

<form class="m-5 bg-gradient-primary" method="POST" action="userformular.php" enctype="multipart/form-data">

<h1 class="col-12 col-md-6 m-auto"">Login på din bruger</h1>
<br>

<p class="col-12 col-md-6 m-auto""> Har du ikke allerede en bruger så kan du let <a href='index.html'>oprette en.</a></p>
<br><br>
    <div class="col-12 col-md-6 m-auto">
        <div class="form-group">
            <input class="form-control text-primary" type="text" name="data[username]" id="" placeholder="Skriv dit brugernavn" value="">
        </div>
    </div>

    <div class="col-12 col-md-6 m-auto">
        <div class="form-group">
            <input class="form-control text-primary" type="password" name="data[password]" id="" placeholder="Skriv dit kodeord" value="">
        </div>
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
