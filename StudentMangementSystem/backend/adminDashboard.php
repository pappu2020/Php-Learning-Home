<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstarp Format</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/adminDashboard.css">
</head>

<body>
    <div class="container-fluid">

        <nav>
            <div class="navBarContainer">
                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="bd-highlight menu">


                        <a class="btn mymenuBtn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                                    class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg></span>
                        </a>

                        <div class="offcanvas offcanvas-start myMenuBody" tabindex="-1" id="offcanvasExample"
                            aria-labelledby="offcanvasExampleLabel">

                            <div class="offcanvas-body">

                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-solid fa-house-user icon"></i>

                                        <p class="menuListItemPara">Dashboard</p>

                                    </div>
                                </a>
                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-solid fa-users-gear icon"></i>

                                        <p class="menuListItemPara">Employees</p>

                                    </div>
                                </a>
                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-solid fa-user-tie icon"></i>

                                        <p class="menuListItemParaStudent">Students</p>

                                    </div>
                                </a>
                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-sharp fa-solid fa-sack-dollar icon"></i>

                                        <p class="menuListItemParaTuition">Salary</p>

                                    </div>
                                </a>

                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-sharp fa-solid fa-sack-dollar icon"></i>

                                        <p class="menuListItemParaTuition">Tuition</p>

                                    </div>
                                </a>

                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">
                                
                                        <i class="fa-sharp fa-solid fa-sack-dollar icon"></i>
                                
                                        <p class="menuListItemParaRevenue">Revenue</p>
                                
                                    </div>
                                </a>





                            </div>

                        </div>
                    </div>





                    <div class="bd-highlight SearchDiv">

                    <div class="d-flex bd-highlight searchItem">
                        <div class="flex-grow-1 bd-highlight"><input type="text" class="form-control" placeholder="Search.."></div>
                        <div class="bd-highlight searchIconDiv"><span class="searchIcon"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-search"
                            viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></span></div>
                       
                    </div>

                    </div>
                    <div class=" bd-highlight">
                    <div class="logo">
                        <img src="../img/logo2.JPG" alt="" width="160px" height="90px" class="logoImg">
                    </div>
                    </div>
                    <div class=" bd-highlight userTitleDiv">

                        <p class="userTitle">Pappu Saha</p1>
                    </div>
                    <div class=" bd-highlight">
                        <img src="../img/student.jpg" class="userImage rounded rounded-circle" alt="" width="50px" height="50px">
                    </div>


                    <div class="bd-highlight">
                        <a href="signOutBackend.php" class="btn btn-danger mysignOutBtn">Sign Out</a>
                    </div>

                </div>
            </div>
    </div>
    </nav>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a5ba7b62ab.js" crossorigin="anonymous"></script>
</body>

</html>