<?php require_once('header.php'); ?>
<div class="app-content">
  <div class="content-wrapper">
    <div class="container">

      <div class="row">
        <div class="col">
          <div class="page-description">
            <h1>Profile</h1>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4">
          <div class="card widget widget-stats">
            <div class="card-body">
              <div class="card-header">
                Name
              </div>
              <form action="profile_Update_post.php" method="POST">
                <input type="text" class="form-control m-b-md" value="<?php

                                                                      // $oldNameValue = $_SESSION['nameDataFromDbSession'];

                                                                      // if (isset($_SESSION["updatedName"])) {
                                                                      //   $oldNameValue = $_SESSION["updatedName"];
                                                                      // }

                                                                      // echo $oldNameValue;

                                                                      if (isset($_SESSION["nameDataFromDbSession"])) {
                                                                        echo $_SESSION["nameDataFromDbSession"];
                                                                      }

                                                                      ?>" name="nameChange">
                <button type="submit" class="btn btn-success" name="nameChangeButton">Change Name</button>

                <?php
                if (isset($_SESSION["duplicate_name"])) {
                ?>

                  <div class="alert alert-danger mt-3 p-3">
                    <?php echo $_SESSION["duplicate_name"]; ?>
                  </div>

                <?php
                }

                ?>


                <?php
                if (isset($_SESSION["updateErrorName"])) {
                ?>

                  <div class="alert alert-danger mt-3 p-3">
                    <?php echo $_SESSION["updateErrorName"]; ?>
                  </div>

                <?php
                }

                ?>






                <?php
                if (isset($_SESSION["updateSuccess"])) {
                ?>

                  <div class="alert alert-success mt-3 p-3">
                    <?php echo $_SESSION["updateSuccess"]; ?>
                  </div>

                <?php
                }

                ?>

              </form>
            </div>
          </div>
        </div>



        <div class="col-xl-4">
          <div class="card widget widget-stats">
            <div class="card-body">
              <div class="card-header">
                Email
              </div>
              <form action="profile_Update_post.php" method="POST">
                <input type="text" class="form-control m-b-md" value="<?php

                                                                      // $oldEmailValue = $_SESSION['signInEmailUser'];

                                                                      // if (isset($_SESSION["updatedEmail"])) {
                                                                      //   $oldEmailValue = $_SESSION["updatedEmail"];
                                                                      // }

                                                                      // echo $oldEmailValue;

                                                                      if (isset($_SESSION["signInEmailUser"])) {
                                                                        echo $_SESSION["signInEmailUser"];
                                                                      }



                                                                      ?>" name="emailChange">
                <button type="submit" class="btn btn-success" name="emailChangeButton">Change Email</button>

                <?php
                if (isset($_SESSION["duplicate_email"])) {
                ?>

                  <div class="alert alert-danger mt-3 p-3">
                    <?php echo $_SESSION["duplicate_email"]; ?>
                  </div>

                <?php
                }

                ?>

                <?php
                if (isset($_SESSION["updateErrorEmail"])) {
                ?>

                  <div class="alert alert-danger mt-3 p-3">
                    <?php echo $_SESSION["updateErrorEmail"]; ?>
                  </div>

                <?php
                }

                ?>





                <?php
                if (isset($_SESSION["updateSuccessEmail"])) {

                ?>
                  <div class="alert alert-success mt-3 p-3">
                    <?php echo $_SESSION["updateSuccessEmail"]; ?>
                  </div>

                <?php

                }

                ?>

              </form>
            </div>
          </div>
        </div>








        <div class="col-xl-4">
          <div class="card widget widget-stats">
            <div class="card-body">
              <div class="card-header">
                Profile Pic
              </div>
              <form action="profile_post.php" method="POST">
                <input type="file" class="form-control m-b-md">
                <button type="submit" class="btn btn-success">Upload File</button>
              </form>
            </div>
          </div>
        </div>


        <div class="col-xl-4">
          <div class="card widget widget-stats">
            <div class="card-body">
              <div class="card-header">
                Password Change
              </div>
              <form action="profile_Update_post.php" method="POST">
                <input type="password" class="form-control m-b-md" name="old_password" placeholder="Enter the Old password">
                <input type="password" class="form-control m-b-md" name="new_password" placeholder="Enter the New password">
                <input type="password" class="form-control m-b-md" name="confirm_password" placeholder="Enter the password again">
                <button type="submit" class="btn btn-success" name="password_change">Submit</button>
              </form>



              <?php
              if (isset($_SESSION["PasswordCheck"])) {
              ?>

                <div class="alert alert-danger mt-3 p-3">
                  <?php echo $_SESSION["PasswordCheck"]; ?>
                </div>

              <?php
              }

              ?>

              <?php
              if (isset($_SESSION["PasswordUpdateSuccess"])) {
              ?>

                <div class="alert alert-success mt-3 p-3">
                  <?php echo $_SESSION["PasswordUpdateSuccess"]; ?>
                </div>

              <?php
              }

              ?>

              <?php
              if (isset($_SESSION["PasswordUpdateDuplicate"])) {
              ?>

                <div class="alert alert-danger mt-3 p-3">
                  <?php echo $_SESSION["PasswordUpdateDuplicate"]; ?>
                </div>

              <?php
              }

              ?>

              <?php
              if (isset($_SESSION["PasswordUpdateMatched"])) {
              ?>

                <div class="alert alert-danger mt-3 p-3">
                  <?php echo $_SESSION["PasswordUpdateMatched"]; ?>
                </div>

              <?php
              }

              ?>






            </div>
          </div>
        </div>








        <div class="col-xl-4">
          <div class="card widget widget-stats">
            <div class="card-body">
              <div class="card-header">
                Delete User
              </div>
              <form action="profile_Update_post.php" method="POST">

                <input type="number" class="form-control m-b-md" name="delete" placeholder="Enter the ID: ">
                <button type="submit" class="btn btn-success" name="deleteBtn">Delete</button>
              </form>

              <?php
              if (isset($_SESSION["DeleteData"])) {
              ?>

                <div class="alert alert-success mt-3 p-3">
                  <?php echo $_SESSION["DeleteData"]; ?>
                </div>

              <?php
              }

              ?>


              <?php
              if (isset($_SESSION["DeleteFieldNull"])) {
              ?>

                <div class="alert alert-danger mt-3 p-3">
                  <?php echo $_SESSION["DeleteFieldNull"]; ?>
                </div>

              <?php
              }

              ?>



            </div>
          </div>
        </div>

      </div>






    </div>
  </div>
</div>

<?php require_once('footer.php'); ?>