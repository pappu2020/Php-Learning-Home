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

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./page1.php">Page 1</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./page2.php">Page 2</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <div class="myCalculator">
            <form action="" method="POST">

                <div class="mb-3">
                    <label for="num1" class="form-label">Enter the first number: </label>
                    <input type="number" class="form-control" name="num1" value="<?php
                                                                                    if ((isset($_POST["num1"]) && isset($_POST["num2"]))) {
                                                                                        if ($_POST["num1"]) {
                                                                                            if ($_POST["num2"]) {
                                                                                                if (isset($_POST["add"])) {
                                                                                                    echo $_POST["num1"] + $_POST["num2"];
                                                                                                }

                                                                                                if (isset($_POST["sub"])) {
                                                                                                    echo $_POST["num1"] - $_POST["num2"];
                                                                                                }

                                                                                                if (isset($_POST["mul"])) {
                                                                                                    echo $_POST["num1"] * $_POST["num2"];
                                                                                                }

                                                                                                if (isset($_POST["div"])) {
                                                                                                    echo $_POST["num1"] / $_POST["num2"];
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }




                                                                                    ?>">

                </div>

                <div class="mb-3">
                    <label for="num2" class="form-label">Enter the second number: </label>
                    <input type="number" class="form-control" name="num2">

                </div>

                <button type="submit" class="btn btn-primary" name="add">+</button>
                <button type="submit" class="btn btn-primary" name="sub">-</button>
                <button type="submit" class="btn btn-primary" name="mul">*</button>
                <button type="submit" class="btn btn-primary" name="div">/</button>
                <a href="./index.php" class="btn btn-danger">Reset</a>



            </form>
        </div>


        <div class="output p-3 bg-success mt-5">
            <h1 class="fst-italic fw-bold text-light">Result: <?php

                                                                // $num1 = $_POST["num1"];
                                                                // $num2 = $_POST["num2"];

                                                                // $add = $_POST["add"];
                                                                // $sub = $_POST["sub"];
                                                                // $mul = $_POST["mul"];
                                                                // $div = $_POST["div"];


                                                                if ((isset($_POST["num1"]) && isset($_POST["num2"]))) {
                                                                    if ($_POST["num1"]) {
                                                                        if ($_POST["num2"]) {
                                                                            if (isset($_POST["add"])) {
                                                                                echo $_POST["num1"] + $_POST["num2"];
                                                                            }

                                                                            if (isset($_POST["sub"])) {
                                                                                echo $_POST["num1"] - $_POST["num2"];
                                                                            }

                                                                            if (isset($_POST["mul"])) {
                                                                                echo $_POST["num1"] * $_POST["num2"];
                                                                            }

                                                                            if (isset($_POST["div"])) {
                                                                                echo $_POST["num1"] / $_POST["num2"];
                                                                            }
                                                                        }
                                                                    }
                                                                }








                                                                ?></h1>
        </div>























        <footer style="margin-top:200px">
            <h1>Made by pappu saha</h1>
        </footer>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>