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
            <form class="form-container" action="add_license.php" method="POST" style="margin-top:70px; border: 1px solid black">
        
                <input type="text" name="softwareName" placeholder="Software Name:" class="form-container" required><br/>

                <input type="text" name="softwarePrice" placeholder="Software Price:" class="form-container" required><br/>

                <input type="text" name="licenseKey" placeholder="License Key:" class="form-container" required><br/>

                <input type="text" name="employeeID" placeholder="Employee ID:" class="form-container" required><br/>

                <br>
                <input name="insertLicense" type="submit" value="Insert" class="glowButton"> 
            </form>

            <?php
            if(isset($_POST['insertLicense'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $softwareNameData = $_POST['softwareName'];
                $softwarePriceData = $_POST['softwarePrice'];
                $licenseKeyData = $_POST['licenseKey'];
                $employeeidData = $_POST['employeeID'];


                $result = mysqli_query($dbc,"INSERT INTO software_license (software_name, software_price, license_key, employee_ID) VALUES ('$softwareNameData', '$softwarePriceData', '$licenseKeyData', '$employeeidData')");
                
                if ($result) {

                    echo '<script type="text/javascript">'; 
                    echo 'alert("Insert Successfully");'; 
                    echo 'window.location.href = "admin_dashboard.php";';
                    echo '</script>';
                    
                } else {
                    
                    echo "Something Went Wrong. Please Check adn Try Again " . mysqli_error($conn);
                    
                }

            }
        ?>
        
    </body>
</html>