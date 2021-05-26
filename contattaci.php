<!DOCTYPE html>
<html lang="it">
    <head>

        <?php include("./filephp/head.php");?>

        <title>Contattaci</title>
    </head>
    <body>

    <?php include("./filephp/cookie.php");?>

    <?php include("./filephp/navbar.php");?>

                <section class="headerbg">
                    <div class="headerbg-inner">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h1 class="titolo">contattaci</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <form action="process.php" method="post" class="mailer">
                        <input type="text" name="UName" placeholder="Nome Utente" class="form-control mb-2">
                        <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                        <input type="text" name="Subject" placeholder="Soggetto" class="form-control mb-2">
                        <textarea name="msg" placeholder="Scrivi un messaggio.." class="form-control mb-2"></textarea>
                        <button class="btn btn-success button" name="btn-send"> Invia </button>
                    </form>
                </div>
            </div>
        </div>

        <?php include("./filephp/footer.php");?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <script src="function.js"></script>
    </body>
</html>