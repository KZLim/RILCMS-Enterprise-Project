<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width" initial-scale="1.0">
        <link rel="stylesheet" href="register.css">
        <title>Register | Student</title>
    </head>

    <body>

        <a href="homepage.php"><img class="logo" src="images/back icon.png" ></a>

        <div class="formcontainer">
            <h1 class="title">Student Register</h1>
            <form class="detailform" action="register.php" method="POST">
                <input type="text" class="input" name="studentName" placeholder="Name:" required>

                <input type="text" class="input" name="studentIC" placeholder="IC Number:" required>

                <textarea class="input" name="studentAddress" placeholder="Address:"></textarea>

                <input type="tel" class="input" name="studentContact" placeholder="Contact Number:" required>

                <input type="number" class="input" name="studentAge" placeholder="Age:" required>
                <input type="email" class="input" name="studentEmail" placeholder="Email:" required>

                <select class="input" name="studentGender" >
                    <option value="female">female</option>
                    <option value="male">male</option>
                </select>

                <br><br>

                <input name="register_submit" type="submit" value="Register" class="glowButton"> 
            </form>
        </div>

        <?php
            if(isset($_POST['register_submit'])){
                                    
                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");
                    
                $sNameData = $_POST['studentName'];
                $sICNumData = $_POST['studentIC'];
                $sAddressData = $_POST['studentAddress'];
                $sContactData = $_POST['studentContact'];
                $sAgeData = $_POST['studentAge'];
                $sEmailData = $_POST['studentEmail'];
                $sGenderData = $_POST['studentGender'];

                $result = mysqli_query($dbc,"SELECT student_IC FROM student WHERE student_IC = '".$sICNumData."'");
                
                $checkRecordExistence = mysqli_num_rows($result);

                if($checkRecordExistence > 0){
                    //header("refresh:2; Location: coursepage.php?sName=$sNameData");
                    echo '<script>alert("Record Found, You are existing student. Proceed Next")</script>';
                }
                else{
                    $query = mysqli_query($dbc,"INSERT INTO student (student_IC, student_name, student_address, student_contact, student_age,
                    student_gender, student_email) VALUES ('$sICNumData', '$sNameData', '$sAddressData', '$sContactData',
                    '$sAgeData', '$sGenderData', '$sEmailData')");
                }
                echo"<script> window.location.href = \"http://localhost/RILCMS/coursepage.php?sName=\" + '$sNameData'</script>";
            }
        ?>
    </body>
</html>