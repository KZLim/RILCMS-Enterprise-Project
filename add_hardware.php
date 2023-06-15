<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Admin | Add Hardware</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css">
        <?php include 'admin_header.php';?>
    </head>

    <body>
        <form action="add_hardware.php" method="POST" class="add-hardware-container" >

            <h1 class="heading">Add Hardware</h2>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="hardwareId" class="hardware-form-label">Hardware Id:</label><br>
                        <input type="text" class="input" name="hardwareID" required><br>
                    </div>
                    <div class="col">
                        <label for="assetName" class="hardware-form-label">Hardware Name:</label><br>
                        <input type="text" class="input" name="hardwareName" required><br>
                    </div>
                    <div class="col">
                        <label for="assetType" class="hardware-form-label">Hardware Type:</label><br>
                        <input type="text" class="input" name="hardwareType" required><br>
                    </div>
                    <div class="col">
                        <label for="assetPrice" class="hardware-form-label">Hardware Price:</label><br>
                        <input type="text" class="input" name="hardwarePrice" required><br>
                    </div>
                    <div class="col">
                        <label for="status" class="hardware-form-label">Status:</label><br>
                        <select class="input" name="hardwareStatus" >
                            <option value="status" selected>Status</option>
                            <option value="Inventory">Inventory</option>
                            <option value="Checked Out">Checked Out</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="employeeId" class="hardware-form-label">Employee ID:</label><br>
                        <input type="text" class="input" name="employeeID" required><br>
                    </div>
                </div>   

                <div class="col">
                    <input type="submit" name="addHardware" class="glow-Button" value="Add Asset">
                </div>
            </div>  
        </form>

        <?php
            if(isset($_POST['addHardware'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $hardwareIdData = $_POST['hardwareID'];
                $hardwareNameData = $_POST['hardwareName'];
                $hardwareTypeData = $_POST['hardwareType'];
                $hardwarePriceData = $_POST['hardwarePrice'];
                $hardwareStatusData = $_POST['hardwareStatus'];
                $employeeIdData = $_POST['employeeID'];

                $result = mysqli_query($dbc,"INSERT INTO hardware_asset (asset_id, asset_name, asset_type, asset_price, asset_status, employee_id)
                                        VALUES ('$hardwareIdData', '$hardwareNameData', '$hardwareTypeData', '$hardwarePriceData','$hardwareStatusData','$employeeIdData')");
                
                if ($result) {

                    echo '<script type="text/javascript">'; 
                    echo 'alert("Added Successfully");'; 
                    echo 'window.location.href = "admin_dashboard.php";';
                    echo '</script>';
                    
                } else {
                    
                    echo "Something Went Wrong. Please Check adn Try Again " . mysqli_error($conn);
                    
                }

            }
        ?>

    </body>
</html>
