<?php
require_once('./headerAdminDashboard.php');
require_once('../../db.php');


$allTeacherList = "SELECT * FROM employees WHERE postion='Teacher'";
$allTeacherListRes = mysqli_query($con, $allTeacherList);






?>


<div class="allEmployeesListContainer">
    <h4 class="employeeListHeading">Teacher List</h4>
</div>


<div class="row employeeListDiv">
    <div class="col-lg-11 employeeList">

        <div class="employeesListTableDiv">
            <table class="table employeesListTable table-hover table-striped table-bordered border-dark">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Postion</th>
                        <th scope="col">Email</th>

                        <th scope="col">FatherName</th>
                        <th scope="col">MotherName</th>
                        <th scope="col">GurdianPhone</th>
                        <th scope="col">Nationalid</th>
                        <th scope="col">BirthRegNum</th>
                        <th scope="col">DOB</th>
                        <th scope="col">PhoneNum</th>
                        <th scope="col">BloodGrp</th>
                        <th scope="col">Religion</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Howtoknowaboutus</th>
                        <th scope="col">PresentAddress</th>
                        <th scope="col">ParmanentAddress</th>
                        <th scope="col">Edit</th>
                        <th scope="col">View Profile</th>
                        <th scope="col">Remove</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($allTeacherListRes as $key => $teachers) {


                    ?>
                        <tr>
                            <th><?= $key + 1; ?></th>
                            <td><?= $teachers["name"];  ?></td>
                            <td><?= $teachers["postion"];  ?></td>
                            <td><?= $teachers["email"];  ?></td>

                            <td><?= $teachers["fatherName"];  ?></td>
                            <td><?= $teachers["motherName"];  ?></td>
                            <td><?= $teachers["gurdianPhone"];  ?></td>
                            <td><?= $teachers["nationalid"];  ?></td>
                            <td><?= $teachers["birthRegNum"];  ?></td>
                            <td><?= $teachers["dob"];  ?></td>
                            <td><?= $teachers["phoneNum"];  ?></td>
                            <td><?= $teachers["bloodGrp"];  ?></td>
                            <td><?= $teachers["religion"];  ?></td>
                            <td><?= $teachers["Gender"];  ?></td>
                            <td><?= $teachers["Howtoknowaboutus"];  ?></td>
                            <td><?= $teachers["presentAddress"];  ?></td>
                            <td><?= $teachers["parmanentAddress"];  ?></td>

                            <!-- edit -->
                            <td><a href="#" class="btn btn-primary"><span class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                        </svg></span></a></td>


                            <!-- view -->
                            <td><a href="#" class="btn btn-info"><span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg></a></td>



                            <!-- Delete -->
                            <td><a href="teacherDelete.php?id=<?= $teachers["id"];  ?>" class="btn btn-danger"><span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></span></a></td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<?php

if (isset($_SESSION["Delete_success_teacher_list"])) {
?>

    <div class="alert alert-success mt-4">
        <?php echo $_SESSION["Delete_success_teacher_list"]  ?>
    </div>

<?php }
unset($_SESSION["Delete_success_teacher_list"]) ?>






<?php
require_once('./footerAdminDashboard.php');

?>