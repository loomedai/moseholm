<?php
session_start();
$user = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Moseholm gård</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9078a86c62.js" crossorigin="anonymous"></script>
    <link rel="icon" href="https://i.talpix.lt/zz67A.png">
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content logget">
            <div class="modal-body">
                <p><?php
                    echo "Du er nu logget ind som $user->username"
                    ?></p>

                <a href="index.php" class="btn btn-primary" role="button" id="ok">Ok</a>


            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand text-winter" href="#">
        <img src="img/log.png" class="logobig">
        <img src="img/logsmall.png" class="logosmall">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-winter"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto align-items-end">
            <li class="nav-item active" >
                <a class="nav-link text-winter" href="#kas1">Stor kasse <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-winter" href="#kas2">Lille kasse <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-winter" href="#kas3">Pluk selv <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-winter" href="#kas4">Hudpleje kasse <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-winter" href="produkt.html">Produkter <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-winter" href="omos.html">Gården <span class="sr-only">(current)</span></a>
            </li>

        </ul>
        <ul class=" navbar-nav align-items-end">
            <li type="button" class="nav-item active form-inline me-2" data-toggle="modal" data-target="#Modal">
                <i class="far fa-user text-winter text-right"></i>
            </li>
        </ul>
    </div>
</nav>




<section class="scroll" id="kas1">
    <div id="SBWrapper" class="SBwrapper vh-100 bg-primary">
        <div id="sub-menu">
            <div class="kasBes">
                <p class="text-winter font-weight-bold">
                    Pris: 249 kr </p>
                <p class="text-winter">
                    Vores mest populære grøntkasse - sammensat med kærlighed af grønne fingre.
                    Indeholder ca 5 kg. grøntsager (minimum 5 forskellige varianter).
                    Vi sammensætter kassens indhold efter årstiden og garantere friske, sprøde og velsmagende grøntsager i verdensklasse.
                </p>
                <button class="btn btn-primary btnfirst" data-toggle="modal" data-target="#Modal2">Bestil kassen</button>
            </div>
        </div>

        <div class="imgWrap" id="frKas">

            <img class="DeskBoxS" src="img/boxStork.png">
            <button class="btn btn-primary btnfirst" id="action-menu">
                Læs mere om vores Store kasse
            </button>

        </div>

    </div>


</section>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
<script src="js/main.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function remove(){
        const myDiv = document.getElementById("gone")
        const parent = myDiv.parentNode;
        parent.removeChild(myDiv)
        console.log("do something");
    }
</script>

</body>
</html>
