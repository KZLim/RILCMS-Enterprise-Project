<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width" initial-scale="1.0">
    <link rel="stylesheet" href="./register.css">
    <title>Register | Student</title>
</head>
<body>
    <div class="formcontainer">
        <h1 class="title">Student Register</h1>
        <img class="logo" src="images/iot-learning-centre-low-resolution-logo-color-on-transparent-background.png" >
        <form class="detailform" action="" method="">
            <input type="text" class="input" name="username" placeholder="Name:" required>

            <input type="text" class="input" name="ID" placeholder="IC Number:" required>

            <textarea class="input" name="address" placeholder="Address:"></textarea>

            <input type="tel" class="input" name="contact" placeholder="Contact Number:" required>

            <input type="number" class="input" name="age" placeholder="Age:" required>
            <input type="email" class="input" name="email" placeholder="Email:" required>


            <select class="input" name="gender" >
                <option value="female">female</option>
                <option value="male">male</option>
            </select>
              
            <br><br>
                
                
            <input name="signin" type="submit" value="Sign In" class="glowButton">
        </form>
    </div>
    
    
    

</body>
</html>