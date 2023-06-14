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

    <title>Admin | Add Hardware</title>
</head>
<body>

    <form action="" method="POST" class="add-hardware-container" >

        <h1 class="heading">Add Hardware</h2>

        <div class="container text-center">
            
            <div class="row">
                <div class="col">
                    <label for="hardwareId" class="hardware-form-label">Hardware Id:</label><br>
                    <input type="text" class="input" id="hardwareid" name="hardwareID" required><br>
                </div>
                <div class="col">
                    <label for="assetName" class="hardware-form-label">Asset Name:</label><br>
                    <input type="text" class="input" id="assetName" name="assetName" required><br>
                </div>
                <div class="col">
                    <label for="assetType" class="hardware-form-label">Asset Type:</label><br>
                    <input type="text" class="input" id="assetType" name="assetType" required><br>
                </div>
                <div class="col">
                    <label for="assetPrice" class="hardware-form-label">Asset Price:</label><br>
                    <input type="text" class="input" id="assetType" name="assetPrice" required><br>
                </div>
                <div class="col">
                    <label for="status" class="hardware-form-label">Status:</label><br>
                    <select class="input" name="statusHardware" >
                        <option value="status" selected>Status</option>
                        <option value="inventory">Inventory</option>
                        <option value="checkedOut">Checked Out</option>
                    </select>
                </div>
                <div class="col">
                    <label for="employeeId" class="hardware-form-label">Employee Id:</label><br>
                    <input type="text" class="input" id="employeeId" name="employeeId" required><br>
                </div>

            </div>   


            
                <div class="col">
                   
                    <input type="submit" class="glow-Button" value="Add Employee">
                </div>
                
            </div>  
            
           

    </form>
</body>
</html>
