<?php require_once "controllerUserData.php"; ?>


<!DOCTYPE html>
<html lang="it">
    <head>

    <?php include("./filephp/head.php");?>

        <title>Home Page</title>
    </head>
    <body>

    <?php include("./filephp/cookie.php");?>

    <?php include("./filephp/navbar.php");?>

        <section class="headerbg">
            <div class="headerbg-inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1 class="titolo">IEXS Discovery</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p>
                        <h2 class="titolo">
                            Progetto Trimestrale 3^A - 3^B
                        </h2>
                        <h3 class="titolo">
                            Marzo-Maggio 2021
                        </h3>
                        <h5 class="p">
                            In questo blog verranno inseriti contenuti inerenti a tre inchieste,<br>
                            svolte dagli studenti della terza superiore della scuola International Experiential School.<br>
                            Gli argomenti saranno: cybersecurity, ambiente e mestieri di una volta.<br>
                            Video, foto ed articoli di giornale faranno luce sugli aspetti positivi e negativi negli ambiti sopra elencati.
                        </h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-4">
                    <a href="/cybersecurity.php">
                        <img src="/images/1.jpg" class="images_home" alt="cybersecurity">
                    </a>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <a href="/ambiente.php">
                        <img src="/images/2.jpg" class="images_home" alt="ambiente">
                    </a>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <a href="/mestieri.php">
                        <img src="/images/3.jpg" class="images_home" alt="mestieri"> 
                    </a>
                </div>
            </div>
        </div>

        <?php include("./filephp/footer.php");?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <script src="function.js"></script>
    </body>
</html>