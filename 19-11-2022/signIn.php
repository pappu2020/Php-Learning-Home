<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstarp Format</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-lg-5 m-auto">
                <?php

                if (isset($_SESSION['signInFailed'])) {
                ?>

                    <div class="alert alert-danger"><?php echo $_SESSION['signInFailed'] ?></div>

                <?php
                }

                ?>

                <form action="./SignInBackend.php" method="POST">

                    <h1>Sign In</h1>

                    <div class="mb-3">
                        <label for="Signemail" class="form-label">Email</label>
                        <input type="text" class="form-control" name="Signemail">
                    </div>

                    <?php

                    if (isset($_SESSION["Signemail_error"])) {
                    ?>

                        <div class="alert alert-danger"><?php echo $_SESSION["Signemail_error"] ?></div>

                    <?php
                    }

                    ?>

                    <div class="mb-3">
                        <label for="Signpassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="Signpassword">
                    </div>

                    <?php

                    if (isset($_SESSION["Signpassword_error"])) {
                    ?>

                        <div class="alert alert-danger"><?php echo $_SESSION["Signpassword_error"] ?></div>

                    <?php
                    }

                    ?>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>
        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
session_destroy();
?>