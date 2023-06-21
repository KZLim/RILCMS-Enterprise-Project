<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Remove Employee Form</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width" initial-scale="1.0">
        <link rel="stylesheet" href="form.css">
        <?php include 'admin_header.php';?>
    </head>
    <body>
        
        <form action="" method="POST" class="remove-employee-container" >

            <h1 class="heading">Remove Employee</h2>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="employeeId" class="employee-form-label" style="margin-left:auto;margin-right:auto;">Employee Id:</label><br>
                        <input type="text" class="input" name="employeeID" required><br><br>
                    </div>
                        
                    <div class="col">
                        <label for="employeeId" class="employee-form-label" style="margin-left:auto;margin-right:auto;">Confirm Employee Id:</label><br>
                        <input type="text" class="input" name="confirm_employeeID" required><br><br>
                    </div>
                </div>
                <input type="submit" name="removeEmployee" class="glow-Button" value="Remove Employee">
            </div>
        </form>

        <?php
            if(isset($_POST['removeEmployee'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $employeeIdData = $_POST['employeeID'];
                $confirmIdData = $_POST['confirm_employeeID'];
                $queryStatus = false;

                if($employeeIdData == $confirmIdData){
                    $result = mysqli_query($dbc,"DELETE FROM employee WHERE employee_ID ='$employeeIdData';");

                    $queryStatus = $result;

                }
                else{
                    echo"The ID and Confirmation Does Not Match";
                }
                
                if ($queryStatus == true) {

                    echo '<script type="text/javascript">'; 
                    echo 'alert("Employee Removed");'; 
                    echo 'window.location.href = "admin_dashboard.php";';
                    echo '</script>';
                    
                } else if ($queryStatus == false){
                    echo "Something Went Wrong. Please Check and Try Again ";
                }

            }
        ?>
    </body>
</html>
