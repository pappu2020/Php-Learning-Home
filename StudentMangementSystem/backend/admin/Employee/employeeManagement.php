<?php
require_once('./headerAdminDashboard.php');


?>

<div class="mainSectionContainer">
    <h4 class="employeeHeading fw-bold fs-3">Employees Management</h4>



    <div class="row employeeManagementDiv">


        <a href="../../../employeeReg.php" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara ms-4">Employees ADD</p>


            </div>
        </a>

        <a href="./allEmployeeList.php" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara ms-4">All Employees List</p>

            </div>
        </a>


        <a href="#" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara ms-4">Teachers List</p>

            </div>
        </a>
        <a href="#" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara">Admission Officier List</p>

            </div>
        </a>

        <a href="#" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara">Maintenance Technician</p>
                <p class="employeePara2">List</p>

            </div>
        </a>
        <a href="#" class="col-lg-2 text-decoration-none employeesDiv mt-4">
            <div class="employeeManagement ms-2">

                <p class="employeePara">Security Gourd List</p>

            </div>
        </a>

        <a href="#" class="col-lg-2 text-decoration-none employeesDiv mt-4">
            <div class="employeeManagement">

                <p class="employeePara ms-2">Cleaner Person List</p>

            </div>
        </a>

    </div>
</div>
<?php

if (isset($_SESSION["EmployeeinsertSuccess"])) {
?>

    <div class="alert alert-success">
        <?php echo $_SESSION["EmployeeinsertSuccess"]  ?>
    </div>

<?php }
unset($_SESSION["EmployeeinsertSuccess"]) ?>








<?php
require_once('./footerAdminDashboard.php');

?>