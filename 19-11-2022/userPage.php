<?php

session_start();
$localhost  = 'localhost';
$username = "root";
$Dbpassword = '';
$db = "home";

$con = mysqli_connect($localhost, $username, $Dbpassword, $db);


$userId = '';
$userEmail = '';

if (isset($_SESSION['userId']) && isset($_SESSION['userEmail'])) {
    $userId = $_SESSION['userId'];
    $userEmail = $_SESSION['userEmail'];
}


$userNameFind = "SELECT name FROM users WHERE id='$userId' AND email = '$userEmail'";

$userNameFindRes = mysqli_query($con, $userNameFind);


$userName = mysqli_fetch_assoc($userNameFindRes)["name"];



$allUser = "SELECT * FROM users";
$allUserList = mysqli_query($con, $allUser);


$getProfileImg = "SELECT default_profile_pic FROM users WHERE id='$userId' AND email = '$userEmail'";
$getProfileImgRes = mysqli_query($con, $getProfileImg);

$userImg = mysqli_fetch_assoc($getProfileImgRes)['default_profile_pic'];






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


        <h1>Welcome,to the <?php echo $userName ?></h1>


        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Update Name</h1>

                        <form action="./profileUpdate.php" method="POST">
                            <input type="text" class="form-control mb-2" name="nameUpdate" value="<?php echo $userName ?>">

                            <button class="btn btn-info" type="submit" name="nameChageBtn">Update</button>

                            <?php

                            if (isset($_SESSION["updateName"])) {
                            ?>

                                <div class="alert alert-success"><?php echo $_SESSION["updateName"] ?></div>

                            <?php
                            }

                            ?>


                        </form>

                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Upload Photo</h5>
                        <img src="./uploads/profile/<?= $userImg ?>" alt="" width="150px" height="150px">
                        <form action="./profileUpdate.php" method="POST" enctype="multipart/form-data">
                            <input type="file" class="form-control mb-2" name="imgUpload">

                            <button class="btn btn-info" type="submit" name="imgChageBtn">Upload</button>

                            <?php

                            if (isset($_SESSION["updateImg"])) {
                            ?>

                                <div class="alert alert-success"><?php echo $_SESSION["updateImg"] ?></div>

                            <?php
                            }

                            ?>
                        </form>
                    </div>
                </div>
            </div>




        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3>User List</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($allUserList as $key => $UserList) {
                        ?>
                            <tr>
                                <th scope="row"><?= $key + 1  ?></th>
                                <td><?= $UserList["name"] ?></td> 
                                <td><?= $UserList["email"] ?></td>
                                
                            </tr>

                        <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>