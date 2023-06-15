<!DOCTYPE html>

<html>
    <head>
        <title>Thunder Robotics | Homepage</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="main_theme.css">
        <link rel="stylesheet" href="software.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'admin_header.php';?>
    </head>

    <body>
            <form class="form-container" action="update_software.php" method="POST" style="margin-top:70px; border: 1px solid black">
        
                <input type="text" name="softwareName" placeholder="Software Name:" class="form-container" required><br/>

                <input type="text" name="totalEntitlement" placeholder="New Entitlement:" class="form-container" required><br/>

                <input type="text" name="softwareStatus" placeholder="New Software Status:" class="form-container" required><br/>


                <br>
                <input name="updateSoftware" type="submit" value="Update" class="glowButton"> 
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
                    
                    echo "Something Went Wrong. Please Check adn Try Again " . mysqli_error($conn);
                    
                }

            }
        ?>
        
    </body>
</html>