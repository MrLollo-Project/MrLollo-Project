<!DOCTYPE html>
<html lang="it">
    <head>

        <?php include("./filephp/head.php");?>

        <link rel="stylesheet" href="/css/gallery.css">
        <link rel="stylesheet" href="/css/lightbox.min.css">
        <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
        <title>Gallery</title>
    </head>
    <body>

    <?php include("./filephp/cookie.php");?>

    <?php include("./filephp/navbar.php");?>

        <section class="headerbg">
            <div class="headerbg-inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1 class="titolo">gallery</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="gallery">
            <a href="images/gallery/gallery1.png" data-lightbox="mygallery"><img src="images/gallery/gallery1.png"></a>
            <a href="images/gallery/gallery2.jpg" data-lightbox="mygallery"><img src="images/gallery/gallery2.jpg"></a>
            <a href="images/gallery/gallery3.jpeg" data-lightbox="mygallery"><img src="images/gallery/gallery3.jpeg"></a>
            <a href="images/gallery/gallery4.jpeg" data-lightbox="mygallery"><img src="images/gallery/gallery4.jpeg"></a>
            <a href="images/gallery/gallery5.jpeg" data-lightbox="mygallery"><img src="images/gallery/gallery5.jpeg"></a>
            <a href="images/gallery/gallery6.jpeg" data-lightbox="mygallery"><img src="images/gallery/gallery6.jpeg"></a>
            <a href="images/gallery/gallery7.jpg" data-lightbox="mygallery"><img src="images/gallery/gallery7.jpg"></a>
            <a href="images/gallery/gallery8.jpg" data-lightbox="mygallery"><img src="images/gallery/gallery8.jpg"></a>
        </div>

        <?php include("./filephp/footer.php");?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <script src="function.js"></script>
    </body>
</html>