<?php
require_once('./headerAdminDashboard.php');

?>

<div class="mainSectionContainer">
    <h4 class="employeeHeading fw-bold fs-3">Employees Management</h4>

    <div class="row employeeManagementDiv">


        <a href="../../../employeeReg.php" class="col-lg-3 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara">Employees ADD</p>

            </div>
        </a>

        <a href="#" class="col-lg-3 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara">Employees List</p>

            </div>
        </a>


        <a href="#" class="col-lg-3 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara">Employees salary</p>

            </div>
        </a>

    </div>
</div>




<?php
require_once('./footerAdminDashboard.php');

?>