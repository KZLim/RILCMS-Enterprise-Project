<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width" initial-scale="1.0">
        <link rel="stylesheet" href="./register.css">
        <link rel="stylesheet" href="coursepage.css">
        <title>Course Selection | Student</title>
    </head>

    <body>
        <div class="courseformcontainer">
            <h1 class="title" style="margin-top:40px;">Course Selection </h1>
            
            <form class="detailform" action="coursepage.php" method="POST" style="padding-top:20px;">
                <select class="input" name="courseName">
                    <option value="Robotics Entry Level">Robotics Entry Level Class</option>
                    <option value="Robotics Advance Level">Robotics Advance Level Class</option>
                    <option value="Arduino Class">Arduino Class</option>
                    
                </select>

                <select class="input" name="timetable">
                    <option value="Schedule Time" selected>Schedule Time</option>
                    <option value="Monday |9am-11am">Monday |9am-11am</option>
                    <option value="Wednesday |12pm-3pm">Wednesday |12pm-3pm</option>
                    <option value="Thursday |1pm-4pm">Thursday |1pm-4pm</option>
                </select>

                <select class="input" name="branchName">
                    <option value="Ayer Itam Branch">Ayer Itam Branch</option>
                    <option value="Tanjung Bungah Branch">Tanjung Bungah Branch</option>
                    <option value="Bayan Lepas Branch">Bayan Lepas Branch</option>
                    <option value="Kedah Branch">Kedah Branch</option>
                </select>

                <?php
                    error_reporting(E_ERROR | E_PARSE);  //to turn off warning when this is triggered for the second time
                                                        //on display second time, this field is unable to get any data becuase
                                                        //the register page has already pass and is now entering the below isset condition
                                                        //this hidden field is for further passing of the GET data using POST method this time
                    echo'<input type="hidden" name="sName" value="'.$_GET['sName'].'">';
                ?>

                <br><br>
                    
                <input name="course_submit" type="submit" value="Next" class="glowButton">
            </form>
        </div>

        <?php
                if(isset($_POST['course_submit'])){

                    //Getting coursepage form data
                    $sCourseNameData= $_POST['courseName'];
                    $sTimetableData = $_POST['timetable'];
                    $sBranchNameData = $_POST['branchName'];
                    $paymentStatusData = "Pending";
                    $sName = $_POST['sName'];

                    //connecting to database        
                    $dbc=mysqli_connect("localhost","root","");
                    mysqli_select_db($dbc,"rilcms");

                    //This query 1 is to get the IC of the student. IC is not pass directly from the previous form becuase it is sensitive data
                    $query1 = mysqli_query($dbc,"SELECT * FROM student WHERE student_name = '".$_POST['sName']."'");
                    
                    //Fetch data of query1
                    while ($row = $query1->fetch_assoc()){
                        $sICNumData = $row['student_IC'];
                        $emailAddressData = $row['student_email'];
                    }

                    //After selecting course, get the teacher detail from employee table to fill in.
                    $query2 = mysqli_query($dbc,"SELECT employee_name FROM employee WHERE employee_branch = '".$sBranchNameData."' 
                                                AND course_teach = '".$sCourseNameData."'");
                    
                    //Fetch data of query2
                    while ($row = $query2->fetch_assoc()){
                        $employeeNameData = $row['employee_name'];
                    }
                    
                    $query3 = mysqli_query($dbc,"SELECT * FROM student_course WHERE student_IC = '".$sICNumData."' 
                                                AND course_name = '".$sCourseNameData."'");

                    
                    $checkRecordExistence = mysqli_num_rows($query3);

                    if($checkRecordExistence == 0){
                        //Insert into student_course table with all the relevant information.
                        $query = mysqli_query($dbc,"INSERT INTO student_course (student_IC, student_name, course_name, payment_status, section,
                        employee_name, branch_name) VALUES ('$sICNumData', '$sName', '$sCourseNameData', '$paymentStatusData', '$sTimetableData',
                        '$employeeNameData', '$sBranchNameData')");
                    
                        header("Location: payment.php?sName=$sName&courseName=$sCourseNameData&email=$emailAddressData");
                    }
                    else{
                        echo '<script>alert("You are registered in this class. Please contact us if you need any help.")</script>';
                        echo"<script>window.location.href = \"http://localhost/RILCMS/homepage.php\"</script>";
                    }
                    
                }
            ?>
    </body>
</html>