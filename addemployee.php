<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width" initial-scale="1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="form.css">

    <title>Add Employee Form</title>
</head>
<body>

    <form action="" method="POST" class="add-employee-container" >

        <h1 class="heading">Add Employee</h2>

        <div class="container text-center">
            
            <div class="row">
                <div class="col">
                    <label for="employeeId" class="employee-form-label">Employee Id:</label><br>
                    <input type="text" class="input" id="employeeid" name="employeeID" required><br><br>
                </div>
                <div class="col">
                    <label for="password" class="employee-form-label">Create Password:</label><br>
                    <input type="password" class="input" id="password" name="password" required><br>
                </div>
            </div>   


            <div class="row">
                <div class="col">
                    <label for="name" class="employee-form-label" >Name:</label><br>
                    <input type="text" class="input" id="name" name="name" required><br><br>
                </div>
                <div class="col">
                    <label for="contact" class="employee-form-label">Contact:</label><br>
                    <input type="tel" class="input" id="Contact" name="contact" required><br><br>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <label for="address" class="employee-form-label">Address:</label><br>
                    <textarea type="text" class="input" id="address" name="address" required></textarea><br></br>
                </div>
                <div class="col">
                    <label for="course" class="employee-form-label">Course teach:</label><br>
                    <input type="text"  class="input" id="courseTeach" name="courseTeach" required><br><br>
                </div>
            </div>   


            <div class="row">
                <div class="col">
                    <label for="branch" class="employee-form-label">Course teach:</label><br>
                    <select class="input" name="Branch Name" >
                        <option value="Branch Name" selected>Branch Name</option>
                        <option value="Ayer Itam Branch">Ayer Itam Branch</option>
                        <option value="Tanjung Bungah Branch">Tanjung Bungah Branch</option>
                        <option value="Bayan Lepas Branch">Bayan Lepas Branch</option>
                        <option value="Kedah Branch">Kedah Branch</option>
                    </select>
                </div>
                <div class="col">
                   
                    <input type="submit" class="glow-Button" value="Add Employee">
                </div>
                
            </div>  
            
           

    </form>
</body>
</html>
