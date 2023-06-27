<!DOCTYPE html>

<html>
    <head>
        <title>Thunder Robotics | Homepage</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="main_theme.css">
        <link rel="stylesheet" href="form.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'admin_header.php';?>
    </head>

    <body style="background-color: #daf5ff;">
            <form action="update_software.php" method="POST" class="remove-hardware-container">

                <h1 class="heading">Update Software</h2>

                <div class="container text-center">
                    
                    <div class="row">
                        <div class="col">
                            <label for="hardwareId" class="hardware-form-label">Software Name</label><br>
                            <input type="text" class = "input" name="softwareName" placeholder="Software Name:" required><br/>
                        </div>

                        <div class="col">
                            <label for="hardwareId" class="hardware-form-label">Total Entitlement:</label><br>
                            <input type="text" class = "input" name="totalEntitlement" placeholder="New Entitlement:" required><br/>
                        </div>

                        <div class="col">
                            <label for="hardwareId" class="hardware-form-label">Status:</label><br>
                            <select class="input" name="softwareStatus" >
                                <option value="status" selected>Status</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>   

                    <div class="col">
                        <input name="updateSoftware" type="submit" value="Insert" class="glow-Button"> 
                    </div>
                        
                </div>  
            </form>

            <?php
            if(isset($_POST['updateSoftware'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $softwareNameData = $_POST['softwareName'];
                $totelEntitlementData = $_POST['totalEntitlement'];
                $softwareStatusData = $_POST['softwareStatus'];


                $result = mysqli_query($dbc,"UPDATE software_asset SET total_entitlement='$totelEntitlementData', software_status='$softwareStatusData' WHERE software_name='$softwareNameData';");
                
                if ($result) {

                    echo '<script type="text/javascript">'; 
                    echo 'alert("Update Successfully");'; 
                    echo 'window.location.href = "admin_dashboard.php";';
                    echo '</script>';
                    
                } else {
                    
                    echo "Something Went Wrong. Please Check and Try Again " . mysqli_error($conn);
                    
                }

            }
        ?>
        
    </body>
</html>