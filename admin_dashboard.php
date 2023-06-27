<html>

    <head>
        <title>Admin | Dashboard</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="admin_theme.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        -->

        <style>
            .toolBox-container {
                background-color: #daf5ff;
                border: 3px solid #616163;
                border-top: 0px;
            }
        </style>

        <?php
            include 'admin_header.php'
        ?>
    </head>

    <body style="margin-top: 70px;">
        <div class="toolBox-container">
            <h1 style="text-align: center;">Hardware Tool Box</h1>
            <div class="flex-container">
                <div class="flex-section-one">
                    <a href="hardware_asset.php"><div class="card">
                        <div class="container">
                            <p>View <br/> Hardware Asset</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two">
                    <a href="add_hardware.php"><div class="card">
                        <div class="container">
                            <p>Add <br/> Hardware Asset</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two">
                    <a href="update_hardwareStatus.php"><div class="card">
                        <div class="container">
                            <p>Update <br/> Hardware Status</p> 
                        </div>
                    </div></a>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-section-one" style="visibility: hidden;">
                    <div class="card">
                        <div class="container">
                            <p>Place Holder</p> 
                        </div>
                    </div>
                </div>

                <div class="flex-section-two">
                    <a href="remove_hardware.php"><div class="card">
                        <div class="container">
                            <p>Remove <br/> Hardware Asset</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-three" style="visibility: hidden;">
                    <div class="card">
                        <div class="container">
                            <p>Place Holder</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="toolBox-container">
            <h1 style="text-align: center;">Software Tool Box</h1>
            <div class="flex-container">
                <div class="flex-section-one">
                    <a href="software_asset.php"><div class="card">
                        <div class="container">
                            <p>View <br/> Software Asset</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two">
                    <a href="new_software.php"><div class="card">
                        <div class="container">
                            <p>New <br/> Software Asset</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two">
                    <a href="add_license.php"><div class="card">
                        <div class="container">
                            <p>Add <br/> Software License</p> 
                        </div>
                    </div></a>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-section-one" style="visibility: hidden;">
                    <div class="card">
                        <div class="container">
                            <p>Place Holder</p> 
                        </div>
                    </div>
                </div>

                <div class="flex-section-two">
                    <a href="update_software.php"><div class="card">
                        <div class="container">
                            <p>Update <br/>License Status</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two" style="visibility: hidden;">
                    <div class="card">
                        <div class="container">
                            <p>Place Holder</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="toolBox-container">
            <h1 style="text-align: center;">Employee Management Tool Box</h1>
            <div class="flex-container">
                <div class="flex-section-one">
                    <a href="add_employee.php"><div class="card">
                        <div class="container">
                            <p>Add Employee</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two">
                    <a href="remove_employee.php"><div class="card">
                        <div class="container">
                            <p>Remove Employee</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two">
                    <a href="employee_list.php"><div class="card">
                        <div class="container">
                            <p>View All Employee</p> 
                        </div>
                    </div></a>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-section-one" style="visibility: hidden;">
                    <div class="card">
                        <div class="container">
                            <p>Place Holder</p> 
                        </div>
                    </div>
                </div>

                <div class="flex-section-two">
                    <a href="reset_employee.php"><div class="card">
                        <div class="container">
                            <p>Reset Password</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-three" style="visibility: hidden;">
                    <div class="card">
                        <div class="container">
                            <p>Place Holder</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="toolBox-container">
            <h1 style="text-align: center;">Student Management Tool Box</h1>
            <div class="flex-container">
                <div class="flex-section-one">
                    <a href="payment_management.php"><div class="card">
                        <div class="container">
                            <p>Update Student Payment</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two">
                    <a href="analytics_panel.php"><div class="card">
                        <div class="container">
                            <p>Analytics Panel</p> 
                        </div>
                    </div></a>
                </div>

                <div class="flex-section-two" style="visibility: hidden;">
                    <a href="analytics_panel.php"><div class="card">
                        <div class="container">
                            <p>Place Holder</p> 
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </body>
</html>