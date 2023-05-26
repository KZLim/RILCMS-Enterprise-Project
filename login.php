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

            <form action="#" method="POST" class="formInnerContainer">
                <input type="text" name="employeeID" class="formField" placeholder ="Employee ID">
                <input type="password" name="employeePassword" id="myInput" class="formField" placeholder ="Password">
                <input type="checkbox" onclick="myFunction()">Show Password

                <script>
                function myFunction() {
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
    </body>
</html>