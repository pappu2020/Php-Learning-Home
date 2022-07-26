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


        <h1>Welcome To The <?php
                            if (isset($_SESSION["UserName"])) {

                            ?>

                <h1>
                    [<?php echo $_SESSION["UserName"]; ?>]
                </h1>

            <?php

                            }
            ?>
        </h1>


        <?php
        if (isset($_SESSION["emailUser"])) {

        ?>

            <h1>
                [<?php echo $_SESSION["emailUser"]; ?>]
            </h1>

        <?php

        }
        ?>


        <!-- <div class="update">
            <h1 class="mt-5 fst-italic fw-bold fs-2">Email Update</h1>
            <form method="POST">
                <div>
                    <label for="update" class="form-label">Enter the Email: </label>
                    <input type="text" name="updateem" class="form-control">
                    <input type="submit" class="btn btn-info mt-3" name="updateSubmit">
                </div>
            </form>
        </div>

        <?php
        if (isset($_SESSION["emailUpdate"])) {
        ?>

            <div class="alert alert-success">
                <?php echo $_SESSION["emailUpdate"]  ?>
            </div>

        <?php

        }

        ?>


        <?php
        if (isset($_POST["updateSubmit"])) {




            $localhost = "localhost";
            $username = "root";
            $passwordDb = "";
            $db = "home";

            $con2 = mysqli_connect($localhost, $username, $passwordDb, $db);
            $emailUpdate = $_POST["updateem"];

            $emailOld = $_SESSION["emailOldForUpdate"];
            $updateSql = "UPDATE users SET Email='$emailUpdate' where Email=$emailOld";

            if (mysqli_query($con2, $updateSql)) {
                $_SESSION["emailUpdate"] = "Your Email Update Successfully";
            } else {
                $_SESSION["emailUpdate"] = mysqli_error($conn);
            }
        }


        ?> -->






    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php session_destroy(); ?>