<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Add Employee Form</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css">
        <?php include 'admin_header.php';?>

    </head>

    <body>

        <form action="add_employee.php" method="POST" class="add-employee-container" >

            <h1 class="heading">Add Employee</h2>

            <div class="container text-center">
                
                <div class="row">
                    <div class="col">
                        <label for="employeeId" class="employee-form-label">Employee Id:</label><br>
                        <input type="text" class="input" name="employeeID" required><br><br>
                    </div>
                    <div class="col">
                        <label for="password" class="employee-form-label">Create Password:</label><br>
                        <input type="password" class="input" name="password" required><br>
                    </div>
                </div>   


                <div class="row">
                    <div class="col">
                        <label for="name" class="employee-form-label" >Name:</label><br>
                        <input type="text" class="input" name="employeeName" required><br><br>
                    </div>
                    <div class="col">
                        <label for="contact" class="employee-form-label">Contact:</label><br>
                        <input type="tel" class="input" name="employeeContact" required><br><br>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label for="address" class="employee-form-label">Address:</label><br>
                        <textarea type="text" class="input" name="employeeAddress" required></textarea><br></br>
                    </div>
                    <div class="col">
                        <label for="course" class="employee-form-label">Course teach:</label><br>
                        <input type="text"  class="input" name="courseTeach" required><br><br>
                    </div>
                </div>   

                <div class="row">
                    <div class="col">
                        <label for="branch" class="employee-form-label">Course teach:</label><br>
                        <select class="input" name="employeeBranch" >
                            <option value="Branch Name" selected>Branch Name</option>
                            <option value="Ayer Itam Branch">Ayer Itam Branch</option>
                            <option value="Tanjung Bungah Branch">Tanjung Bungah Branch</option>
                            <option value="Bayan Lepas Branch">Bayan Lepas Branch</option>
                            <option value="Kedah Branch">Kedah Branch</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="submit" name="addEmployee" class="glow-Button" value="Add Employee">
                    </div>
                </div> 
            </div>
        </form>

        <?php
            if(isset($_POST['addEmployee'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $employeeIdData = $_POST['employeeID'];
                $employeePasswordData = $_POST['password'];
                $employeeNameData = $_POST['employeeName'];
                $employeeContactData = $_POST['employeeContact'];
                $employeeAddrData = $_POST['employeeAddress'];
                $courseTeachData = $_POST['courseTeach'];
                $employeeBranchData = $_POST['employeeBranch'];


                $result = mysqli_query($dbc,"INSERT INTO employee (employee_ID, employee_password, employee_name, employee_contact, employee_address, employee_branch, course_teach)
                                         VALUES ('$employeeIdData', '$employeePasswordData', '$employeeNameData', '$employeeContactData', '$employeeAddrData', '$employeeBranchData', '$courseTeachData')");
                
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
