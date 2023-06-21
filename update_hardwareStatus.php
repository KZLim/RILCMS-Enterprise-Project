<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Admin | Edit Hardware Status</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css">
        <?php include 'admin_header.php';?>
    </head>

    <body>

        <form action="update_hardwareStatus.php" method="POST" class="edit-hardware-container" >

            <h1 class="heading">Edit Hardware Satus</h2>

            <div class="container text-center">
                
                <div class="row">
                    <div class="col">
                        <label for="hardwareID" class="hardware-form-label">Hardware ID:</label><br>
                        <input type="text" class="input" name="hardwareID" required><br><br>
                    </div>

                    <div class="col">
                        <label for="EmployeeID" class="hardware-form-label">Employee ID:</label><br>
                        <input type="text" class="input" name="employeeID" required><br><br>
                    </div>

                    <div class="col">
                        <label for="status" class="hardware-form-label">Status:</label><br>
                        <select class="input" name="hardwareStatus" >
                            <option value="status" selected>Status</option>
                            <option value="Inventory">Inventory</option>
                            <option value="Checked Out">Checked Out</option>
                        </select>
                    </div>
                </div>   

                <div class="col">
                    <input type="submit" name="updateStatus" class="glow-Button" value="Update Status">
                </div>

            </div>  
        </form>

        <?php
            if(isset($_POST['updateStatus'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $hardwareIdData = $_POST['hardwareID'];
                $employeeIdData = $_POST['employeeID'];
                $hardwareStatusData = $_POST['hardwareStatus'];


                $result = mysqli_query($dbc,"UPDATE hardware_asset SET employee_id='$employeeIdData', asset_status='$hardwareStatusData' 
                                        WHERE asset_id='$hardwareIdData';");
                
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
