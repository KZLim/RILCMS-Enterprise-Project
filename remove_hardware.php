<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Admin | Remove Hardware</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css">
        <?php include 'admin_header.php';?>

    </head>

    <body>

        <form action="remove_hardware.php" method="POST" class="remove-hardware-container" >

            <h1 class="heading">Remove Hardware</h2>

            <div class="container text-center">
                
                <div class="row">
                    <div class="col">
                        <label for="hardwareId" class="hardware-form-label">Hardware Id:</label><br>
                        <input type="text" class="input" id="hardwareid" name="hardwareID" required><br><br>
                    </div>

                    <div class="col">
                        <label for="hardwareId" class="hardware-form-label">Confirm Hardware Id:</label><br>
                        <input type="text" class="input" id="hardwareid" name="confirm_hardwareID" required><br><br>
                    </div>
                </div>   

                <div class="col">
                    <input type="submit" name="removeHardware" class="glow-Button" value="Remove Hardware">
                </div>
                    
            </div>  
        </form>

        <?php
            if(isset($_POST['removeHardware'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $hardwareIdData = $_POST['hardwareID'];
                $confirmIdData = $_POST['confirm_hardwareID'];
                $queryStatus = false;

                if($hardwareIdData == $confirmIdData){
                    $result = mysqli_query($dbc,"DELETE FROM hardware_asset WHERE asset_id ='$hardwareIdData';");

                    $queryStatus = $result;

                }
                else{
                    echo"The ID and Confirmation Does Not Match";
                }
                
                if ($queryStatus == true) {

                    echo '<script type="text/javascript">'; 
                    echo 'alert("Hardware Asset Removed");'; 
                    //echo 'window.location.href = "admin_dashboard.php";';
                    echo '</script>';
                    
                } else if ($queryStatus == false){
                    echo "Something Went Wrong. Please Check and Try Again ";
                }

            }
        ?>
    </body>
</html>
