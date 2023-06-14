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

    <title>Admin | Remove Hardware</title>
</head>
<body>

    <form action="" method="POST" class="remove-hardware-container" >

        <h1 class="heading">Remove Hardware</h2>

        <div class="container text-center">
            
            <div class="row">
                <div class="col">
                    <label for="hardwareId" class="hardware-form-label">Hardware Id:</label><br>
                    <input type="text" class="input" id="hardwareid" name="hardwareID" required><br><br>
                </div>
                
               

            </div>   


            
                <div class="col">
                   
                    <input type="submit" class="glow-Button" value="Remove Hardware">
                </div>
                
            </div>  
            
           

    </form>
</body>
</html>
