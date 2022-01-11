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

if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;



    $sql = "INSERT INTO users (username, email, password, firstname, lastname, address, box) VALUES (:username, :email, :password, :firstname, :lastname, :address, :box)";
    $bind = [":username" => $data["username"],
        ":email" => $data["email"],
        ":password" => $data["password"],
        ":firstname" => $data["firstname"],
        ":lastname" => $data["lastname"],
        ":address" => $data["address"],
        ":box" => $data["box"],
    ];

    $db ->sql( $sql, $bind, false);
    echo "Din bruger er nu oprettet, og du kan forvente din første box den kommende lørdag. <a href='index.html'>Tilmeld en ny box.</a>";
    exit;
}


?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Moseholm gård</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/9078a86c62.js" crossorigin="anonymous"></script>

    <link rel="icon" href="https://i.talpix.lt/zz67A.png">


</head>

<body>


<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand text-winter" href="#">
        <img src="img/log.png">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-winter"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto align-items-end">
            <li class="nav-item active" >
                <a class="nav-link text-winter" href="#kas1">Stor Kasse <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-winter" href="#kas2">Lille Kasse <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-winter" href="#kas3">Pluk Selv <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-winter" href="#kas4">Hudpleje Kasse <span class="sr-only">(current)</span></a>
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

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close ml-auto mr-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-header">
                <h3 class="modal-title text-primary" id="ModalLabel">Log ind</h3>
            </div>
            <div class="modal-body">

                <form class="m-5 bg-gradient-primary" method="post" action="login.php" enctype="multipart/form-data">


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


                    <div class="m-auto d-flex">
                        <button class="btn btn-winter" data-toggle="modal" data-target="#Modal2" id="btn1" data-dismiss="modal">Opret bruger</button>
                        <button class="btn btn-primary" type="submit" name="submit"  id="login" value="Login">Login</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="Modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close ml-auto mr-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-header">
                <h3 class="modal-title text-primary" id="Modal2Label">Opret bruger</h3>
            </div>
            <div class="modal-body">

                <form class="m-5 bg-gradient-primary" method="POST" action="userformular.php" enctype="multipart/form-data">

                    <div class="row">

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control text-primary" type="text" name="data[username]" id="udername" placeholder="Brugernavn" value="">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control text-primary" type="password" name="data[password]" id="password" placeholder="Kodeord" value="">

                            </div>

                        </div>
                        <br>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control text-primary" type="text" name="data[firstname]" id="firstname" placeholder="Fornavn" value="">

                            </div>

                        </div>
                        <br>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control text-primary" type="text" name="data[lastname]" id="lastname" placeholder="Efternavn" value="">

                            </div>

                        </div>
                        <br>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control text-primary" type="email" name="data[email]" id="email" placeholder="Email" value="">
                            </div>
                        </div>
                        <br>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="address">Adresse</label>
                                <textarea class="form-control text-primary" name="data[address]" id="address" placeholder="Vejnavn, hus og etage nummer, postnummer og by."></textarea>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <select class="form-control text-primary" name=data[box]">
                                    <option value="">Vælg boks</option>
                                    <option value="Stor Boks">Stor Boks</option>
                                    <option value="Lille boks">Lille Boks</option>
                                    <option value="Pluk selv">Pluk Selv</option>
                                    <option value="Beauty boks">Beauty Boks</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 offset-md-3 d-flex">

                            <button class="form-control btn btn-primary m-auto" type="submit" id="btnSubmit">Opret bruger</button>
                            <button type="button" class="btn m-auto" data-toggle="modal" data-target="#Modal" id="btn3" data-dismiss="modal">Log ind</button>

                        </div>

                    </div>
                </form>


            </div>
        </div>
    </div>
</div>


<section class="scroll" id="kas1">
    <div id="SBWrapper" class="SBwrapper vh-100 bg-primary">
        <div id="sub-menu">
            <p class="kasBes text-winter font-weight-bold">
                Pris: 249 kr <br>
            </p>
            <p class="kasBes text-winter">Vores mest populære grøntkasse - sammensat med kærlighed af grønne fingre.
                Indeholder ca 5 kg. grøntsager (minimum 5 forskellige varianter).
                Vi sammensætter kassens indhold efter årstiden og garantere friske, sprøde og velsmagende grøntsager i verdensklasse.
            </p>


                <button class="btn btn-primary btnfirst" data-toggle="modal" data-target="#Modal2">Bestil kassen</button>

        </div>

        <div class="vh-100 imgWrap" id="frKas">

            <img class="DeskBoxS" src="img/boxBlandselvDesk.png">
            <button class="btn btn-primary btnfirst" id="action-menu">
                Læs mere om vores Store kasse
            </button>

        </div>

    </div>


</section>

<div class="container bg-winter cookie" id="gone">

    <p class="cookie-text">
        Vi bruger cookies
        <button onclick="remove()" class="btn-dark">Acceptere</button>
    </p>

    <script>
        function remove(){
            const myDiv = document.getElementById("gone")
            const parent = myDiv.parentNode;
            parent.removeChild(myDiv)
            console.log("do something");
        }
    </script>

</div>

<section class="scroll" id="kas2">
    <div class="kasse kasse2">
        <h2 class="text-winter">Billede til kasse 2</h2>
    </div></section>
<section class="scroll" id="kas3">
    <div class="kasse kasse3">
        <h2 class="text-winter">Billede til pluk selv kassen</h2>
    </div></section>
<section class="scroll" id="kas4">
    <div class="kasse kasse4">
        <h2 class="text-winter">Billede til beauty</h2>
    </div>
    <div class="bund">
    </div>

    <div class="some">

        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-youtube"></i>

    </div>
    <div class="list">

        <p class="pF">|</p><p class="pF">Forside</p><p class="pF">|</p><p class="pF">Produkter</p><p class="pF">|</p><p class="pF">Om os</p><p class="pF">|</p><p class="pF">Log ind</p><p class="pF">|</p>

    </div>
    <div class="sam">

        <p class="pF">Samarbejdspartnere</p>

    </div>
    <div class="list">

        <p class="pF">Lorem</p><p class="pF">Ipsum</p><p class="pF">Dolor</p><p class="pF">Sit amet</p><p class="pF">Consectetur</p><p class="pF">Elito</p>

    </div>
    <div class="sam">

        <p class="pF">cvr-nummer XXXXXXXX</p>

    </div>
</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
<script src="js/main.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


<script>
    // alert("Vi bruger cookies og registrere statistik om brugen af vores hjemmeside fordi vi gerne vil gøre den bedre og mere målrettet. Ved at klikke 'ok' accepterer du brugen af cookies. og giver samtykke for følgende domæner: \n" +
    //     "\n" +
    //     "Moseholmgaard.dk, Cookiepolitikken er sidst opdateret d. 11.01.2022.")
</script>


</body>
</html>
