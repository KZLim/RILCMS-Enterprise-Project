<!DOCTYPE html>

<html>
    <head>
        <title>Thunder Robotics | Homepage</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="form.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'admin_header.php';?>
    </head>

    <body>
            <form action="new_software.php" method="POST" class="remove-hardware-container">

                <h1 class="heading">New Software Asset</h2>

                <div class="container text-center">
                    
                    <div class="row">
                        <div class="col">
                            <label for="hardwareId" class="hardware-form-label">Software Name</label><br>
                            <input type="text" class="input" name="softwareName" placeholder="Software Name:" class="form-container" required><br/>
                        </div>

                        <div class="col">
                            <label for="hardwareId" class="hardware-form-label">Total Entitlement:</label><br>
                            <input type="text" class = "input" name="totalEntitlement" placeholder="Total Entitlement:" class="form-container" required><br/>
                        </div>
                    </div>   

                    <div class="col">
                        <input name="insert_software" type="submit" value="Insert" class="glow-Button"> 
                    </div>
                </div>  
            </form>

            <?php
            if(isset($_POST['insert_software'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $softwareNameData = $_POST['softwareName'];
                $totalEntitlementData = $_POST['totalEntitlement'];

                $result = mysqli_query($dbc,"INSERT INTO software_asset (software_name, total_entitlement, software_status) VALUES ('$softwareNameData', '$totalEntitlementData', 'Active')");
                
                if ($result) {

                    echo '<script type="text/javascript">'; 
                    echo 'alert("Insert Successfully");'; 
                    echo 'window.location.href = "admin_dashboard.php";';
                    echo '</script>';
                    
                } else {
                    
                    echo "Something Went Wrong. Please Check and Try Again " . mysqli_error($conn);
                    
                }

            }
        ?>
        
    </body>
</html>