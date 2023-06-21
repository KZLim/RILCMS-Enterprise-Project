<html lang="en">

    <head>
        <meta charset = "utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="stylesheet" href="login.css">
        <title>Login | Employee Portal </title>

    </head>

    

    <body>
        <div class="formOuterContainer">
            <h1 class="title">Employee Portal</h1>
            <img class="logo" src="images/iot-learning-centre-low-resolution-logo-color-on-transparent-background.png" >

            <form action="login.php" method="POST" class="formInnerContainer">
                <input type="text" name="employeeID" class="formField" placeholder ="Employee ID">
                <input type="password" name="employeePassword" id="myInput" class="formField" placeholder ="Password">
                <br/><br/>
                <input type="checkbox" onclick="showPassword()">Show Password

                <script>
                function showPassword() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
                }
                </script>
                
                <input name="signin" type="submit" value="Sign In" class="glowButton">
            </form>
        </div>

        <?php

            if(isset($_POST['signin'])){

                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");

                $idData = htmlspecialchars(strip_tags($_POST['employeeID']));
                $passwordData = htmlspecialchars(strip_tags($_POST['employeePassword']));

                $query = mysqli_query($dbc,"SELECT * FROM admin WHERE admin_id = '$idData'");     
                $query2 = mysqli_query($dbc,"SELECT * FROM employee WHERE employee_id = '$idData'");                           
                $checkUserExistence = mysqli_num_rows($query);
                $checkUserExistence2 = mysqli_num_rows($query2);


                if(substr($idData,0,1) == "A"){

                    if($checkUserExistence == 0){
                        echo '<script>alert("User Not Found.")</script>';
                        echo'<script>window.location.href = "login.php"</script>';
                    }

                    while (($row1 = $query->fetch_assoc())){
                        $data1 = $row1['admin_id'];
                        $data3= $row1['admin_password'];
                        
                        //$verify = password_verify($passwordData, $data1);
    
                        if($idData == $data1 && $passwordData == $data3){
                            $goAhead = true;
                            session_start();
                            $_SESSION["identifier_id"] = $data1;
                            $_SESSION["identifier_name"] = $data2;
                            echo'<script>window.location.href = "admin_dashboard.php"</script>';
                        }
                        else{
                            echo"Incorrect Credentials";
                        }
                    }
                }
                else if(substr($idData,0,1) == "T"){

                    if($checkUserExistence2 == 0){
                        echo '<script>alert("User Not Found.")</script>';
                        echo'<script>window.location.href = "login.php"</script>';
                    }

                    while (($row1 = $query2->fetch_assoc())){
                        $data1 = $row1['employee_ID'];
                        $data2 = $row1['employee_name'];
                        $data3= $row1['employee_password'];
                        
                        //$verify = password_verify($passwordData, $data1);
    
                        if($idData == $data1 && $passwordData == $data3){
                            $goAhead = true;
                            session_start();
                            $_SESSION["identifier_id"] = $data1;
                            $_SESSION["identifier_name"] = $data2;
                            echo'<script>window.location.href = "teacher_dashboard.php"</script>';
                        }
                        else{
                            echo"Incorrect Credentials";
                        }
                    }
                }
                else{
                    echo"Error.";
                }
            }
        ?>
    </body>
</html>