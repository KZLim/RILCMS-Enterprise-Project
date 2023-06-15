<html>

    <head>
        <title>Admin | Dashboard</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="admin_theme.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        -->

        <?php
            include 'admin_header.php'
        ?>
    </head>

    <body>
        <div class="flex-container" style="margin-top:70px;">
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

        <div class="flex-container" style="margin-top:70px;" >
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

        <hr>

        <div class="flex-container" style="margin-top:70px;">
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

        <div class="flex-container" style="margin-top:70px;">
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

        <hr>

        <div class="flex-container" style="margin-top:70px;">
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
                <div class="card">
                    <div class="container">
                        <p>Place Holder</p> 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>