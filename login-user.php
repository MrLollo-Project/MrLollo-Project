<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="it">
<head>

        <?php include("./filephp/head.php");?>
        
        <title>Login</title>
</head>
<body>

<?php include("./filephp/cookie.php");?>

<?php include("./filephp/navbar.php");?>

        <section class="headerbg">
            <div class="headerbg-inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1 class="titolo">Login</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="titolo">Login</h2>
                    <h3 class="testo">Accedi con la tua email e password.</h3>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Ha dimenticato la password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Non sei ancora membro? <a href="signup-user.php">Iscriviti ora</a></div>
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