<?php
require "settings/init.php";


if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if(!empty($file["prodPhoto"]["tmp_name"])){
        move_uploaded_file($file["prodPhoto"]["tmp_name"], "uploads/" . basename($file["prodPhoto"]["name"]));
    }


    $sql = "INSERT INTO users (username, email, password, firstname, lastname, address, box) VALUES (:prodTitel, :prodDes, :prodYear, :prodCountry, :prodDir, :prodTime, :prodCast, :prodMusic, :prodGenre, :prodPhoto)";
    $bind = [":username" => $data["username"],
        ":email" => $data["email"],
        ":password" => $data["password"],
        ":firstname" => $data["firstname"],
        ":lastname" => $data["lastname"],
        ":address" => $data["address"],
        ":box" => $data["box"],
    ];

    $db ->sql( $sql, $bind, false);
    echo "Din bruger er nu oprettet, og du kan forvente din første box den kommende lørdag. <a href='insert.php'>Tilmeld en ny box.</a>";
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

<h1 class="m-5">Opret bruger</h1>
<form class="m-5 bg-gradient-primary" method="post" action="userformular.php" enctype="multipart/form-data">

    <div class="row">

        <div class="col-12 col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" name="data[username]" id="udername" placeholder="Brugernavn" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" name="data[password]" id="password" placeholder="Kodeord" value="">

            </div>

        </div>
        <br>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" name="data[firstname]" id="firstname" placeholder="Fornavn" value="">

            </div>

        </div>
        <br>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" name="data[lastname]" id="lastname" placeholder="Efternavn" value="">

            </div>

        </div>
        <br>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <input class="form-control" type="email" name="data[email]" id="email" placeholder="Email" value="">
            </div>
        </div>
        <br>

        <div class="col-12">
            <div class="form-group">
                <label for="address">Adresse</label>
                <textarea class="form-control" name="data[address]" id="address" placeholder="Vejnavn, hus og etage nummer, postnummer og by."></textarea>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <select class="form-control" name=data[box]">
                    <option value="">Vælg boks</option>
                    <option value="">Stor Boks</option>
                    <option value="">Lille Boks</option>
                    <option value="">Bland Selv</option>
                    <option value="">Beauty Boks</option>
                </select>
                <!--
                <input class="form-control" type="text" name="data[box]" id="boxDrop" placeholder="Vælg box" value=""> -->
            </div>
        </div>


        <div class="col-12 col-md-3 offset-md-3">


                <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret bruger</button>



        </div>

    </div>
</form>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector: '#prodDes',

    });
    alert("Denne side vil måske bruge coockies en dag. Who knows. Du har ikke noget valg! ")
</script>
</body>
</html>


