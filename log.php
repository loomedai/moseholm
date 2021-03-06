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
                <a class="nav-link text-winter" href="#kas4">Helse kasse <span class="sr-only">(current)</span></a>
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


                    <div class="m-auto">
                        <div class="form-group">
                            <input class="form-control text-primary" type="text" name="username" placeholder="Skriv dit brugernavn" value="">
                        </div>
                    </div>

                    <div class="m-auto">
                        <div class="form-group">
                            <input class="form-control text-primary" type="password" name="password" placeholder="Skriv dit kodeord" value="">
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
                                <input class="form-control text-primary" type="text" name="data[username]" id="username" placeholder="Brugernavn" value="">
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
                                    <option value="Stor Boks">Stor boks</option>
                                    <option value="Lille boks">Lille boks</option>
                                    <option value="Pluk selv">Pluk selv</option>
                                    <option value="Beauty boks">Beauty boks</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 offset-md-3">

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
            <div class="kasBes">
                <p class="text-winter font-weight-bold">
                    Pris: 349 kr </p>
                <p class="text-winter">
                    Grønt og lidt luxus! - Særlig god til mad-nørderi.
                    <br>
                    I denne kasse finder du ud over ca 5 kg. grøntsager (minimum 5 forskellige varianter) også hjemmelavede økologiske produkter.
                    Moseholm producere selv lækre spislige specialiteter men samarbejder også med bønder, smags-entusiaster og sylte-specialister på vestsjælland.
                    Produkterne kan derfor være alt fra mamelade, sirup, most og meget mere - besøg evt.
                    vores gårdbutik og hør nærmere om udvalget du kan møde i denne kasse.
                </p>
            </div>
        </div>

        <div class="imgWrap" id="frKas">

            <!--            <img class="imgStorBox" src="img/boxStorKasse-lille.png" >-->
            <img src="img/TEST.png">
            <div>
                <button class="btn btn-light text-winter btnfirst" id="action-menu">
                    Læs mere
                </button>
                <button class="btn btn-light text-winter btnfirst" data-toggle="modal" data-target="#Modal2">Bestil kassen</button>
            </div>
        </div>

    </div>


</section>

<div class="container bg-winter cookie" id="gone">

    <p class="cookie-text">
        Vi bruger cookies
        <button onclick="remove()" class="btn-dark cknap">Accepter</button>
    </p>



</div>

<section class="scroll" id="kas2">
    <div id="SBWrapper" class="LBWrapper vh-100 bg-dark">
        <div id="sub-menu">
            <p class="kasBes text-winter font-weight-bold">
                Pris: 249 kr <br>
            </p>
            <p class="kasBes text-winter">Vores mest populære grøntkasse - sammensat med kærlighed af grønne fingre.
                Indeholder ca 5 kg. grøntsager (minimum 5 forskellige varianter).
                Vi sammensætter kassens indhold efter årstiden og garantere friske, sprøde og velsmagende grøntsager i verdensklasse.
            </p>
        </div>

        <div class="vh-100 imgWrap" id="frKas">

            <img class="imgStorBox" src="img/TEST.png" >
            <img class="imgStorBox2" src="img/boxLille.png">
            <div>
                <button class="btn btn-primary btnfirst" id="action-menu">
                    Læs mere
                </button>
                <button class="btn btn-primary btnfirst" data-toggle="modal" data-target="#Modal2">Bestil kassen</button>
            </div>

        </div>

    </div>
</section>

<section class="scroll" id="kas3">
    <div id="SBWrapper" class="PSWrapper vh-100 bg-dark">
        <div id="sub-menu">
            <p class="kasBes text-winter font-weight-bold">
                Pris: 249 kr <br>
            </p>
            <p class="kasBes text-winter">Vores mest populære grøntkasse - sammensat med kærlighed af grønne fingre.
                Indeholder ca 5 kg. grøntsager (minimum 5 forskellige varianter).
                Vi sammensætter kassens indhold efter årstiden og garantere friske, sprøde og velsmagende grøntsager i verdensklasse.
            </p>

        </div>

        <div class="vh-100 imgWrap" id="frKas">

            <img class="imgStorBox" src="img/boxBlandSelv-lille.png" >
            <img class="imgStorBox2" src="img/boxBlandselvDesk.png">
            <div>
                <button class="btn btn-dark btnfirst" id="action-menu">
                    Læs mere
                </button>
                <button class="btn btn-dark btnfirst" data-toggle="modal" data-target="#Modal2">Bestil kassen</button>
            </div>

        </div>

    </div>
</section>

<section class="scroll" id="kas4">
    <div id="SBWrapper" class="BeaWrapper vh-100 bg-beauty">
        <div id="sub-menu">
            <p class="kasBes text-winter font-weight-bold">
                Pris: 249 kr <br>
            </p>
            <p class="kasBes text-winter">Vores mest populære grøntkasse - sammensat med kærlighed af grønne fingre.
                Indeholder ca 5 kg. grøntsager (minimum 5 forskellige varianter).
                Vi sammensætter kassens indhold efter årstiden og garantere friske, sprøde og velsmagende grøntsager i verdensklasse.
            </p>

        </div>

        <div class="vh-100 imgWrap" id="frKas">

            <img class="imgStorBox" src="img/boxBeautyPic-lille.png" >
            <img class="imgStorBox2" src="img/boxBeautyPic.png">
            <div>
                <button class="btn btn-beauty btnfirst" id="action-menu">
                    Læs mere
                </button>
                <button class="btn btn-beauty btnfirst" data-toggle="modal" data-target="#Modal2">Bestil kassen</button>
            </div>

        </div>

    </div>
</section>
<section class="scroll" id="kas5">

    <div class="some">

        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-youtube"></i>

    </div>
    <div class="list">

        <p class="pF">|</p><p class="pF">Forside</p><p class="pF">|</p><p class="pF">Om os</p><p class="pF">|</p><p class="pF">Log ind</p><p class="pF">|</p>

    </div>
    <div class="sam">

        <p class="pF">Samarbejdspartnere</p>

    </div>
    <div class="list">

        <p class="pF">Lorem</p><p class="pF">Ipsum</p><p class="pF">Dolor</p><p class="pF">Sit amet</p><p class="pF">Consectetur</p><p class="pF">Elito</p>

    </div>
    <div class="sam">

        <p class="pF">cvr-nummer XXXXXXXX</p><p class="pF">|</p><p class="pF">Lyngevej 15, 4180 Sorø</p>

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
