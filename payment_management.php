<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Update Payment Status</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width" initial-scale="1.0">
        <link rel="stylesheet" href="form.css">
        <?php include 'admin_header.php';?>
    </head>
    <body style="background-color: #daf5ff;">
        
        <form action="payment_management.php" method="POST" class="remove-employee-container" >

            <h1 class="heading">Update Payment</h2>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="employeeId" class="employee-form-label" style="margin-left:auto;margin-right:auto;">Student IC:</label><br>
                        <input type="text" class="input" name="studentIC" required><br><br>
                    </div>
                        
                    <div class="col">
                        <label for="employeeId" class="employee-form-label" style="margin-left:auto;margin-right:auto;">Confirm Student IC:</label><br>
                        <input type="text" class="input" name="confirmStudentIC" required><br><br>
                    </div>
                </div>
                <input type="submit" name="updatePayment" class="glow-Button" value="Remove Employee">
            </div>
        </form>

        <?php
            if(isset($_POST['updatePayment'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $studentIcData = $_POST['studentIC'];
                $confirmIcData = $_POST['confirmStudetnIC'];
                $queryStatus = false;

                if($employeeIdData == $confirmIdData){
                    $result = mysqli_query($dbc,"UPDATE student_course SET payment_status='Paid' WHERE student_IC='$studentIcData';");
                    
                    $queryStatus = $result;

                }
                else{
                    echo"The IC and Confirmation Does Not Match";
                }
                
                if ($queryStatus == true) {

                    echo '<script type="text/javascript">'; 
                    echo 'alert("Payment Updated to Paid");'; 
                    echo 'window.location.href = "admin_dashboard.php";';
                    echo '</script>';
                    
                } else if ($queryStatus == false){
                    echo "Something Went Wrong. Please Check and Try Again ";
                }

            }
        ?>
    </body>
</html>
