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
            <form class="form-container" action="new_software.php" method="POST" style="margin-top:70px; border: 1px solid black">
        
                <input type="text" name="softwareName" placeholder="Software Name:" class="form-container" required><br/>

                <input type="text" name="totalEntitlement" placeholder="Total Entitlement:" class="form-container" required><br/>

                <br>
                <input name="insert_software" type="submit" value="Insert" class="glowButton"> 
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
                    
                    echo "Something Went Wrong. Please Check adn Try Again " . mysqli_error($conn);
                    
                }

            }
        ?>
        
    </body>
</html>