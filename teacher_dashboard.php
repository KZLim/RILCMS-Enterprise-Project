<html>

    <head>
        <title>Admin | Dashboard</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="admin_theme.css">
        <link rel="stylesheet" href="form.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        -->
        <?php
            include 'admin_header.php'
        ?>
    </head>

    <body>
        <form class="detailform" action="teacher_dashboard.php" method="POST" style="padding-top:70px;">
            <select class="input" name="section" style=" margin-left: 500px;">
                <option value="Schedule Time" selected>Filter Session</option>
                <option value="Monday |9am-11am">Monday |9am-11am</option>
                <option value="Wednesday |12pm-3pm">Wednesday |12pm-3pm</option>
                <option value="Thursday |1pm-4pm">Thursday |1pm-4pm</option>
            </select>

            <input type="submit" name="filterSession" class="glow-Button" value="Load">

        </form>
       
        <?php

            if(isset($_POST['filterSession'])){

                echo'<h1 style="text-align: center;">Generated Student List</h1>';

                $getSectionChocie = $_POST['section'];

                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");

                $query1 = mysqli_query($dbc,"SELECT * FROM student_course WHERE payment_status = 'Paid' && employee_name = '$_SESSION[identifier_name]' && section = '$getSectionChocie'");
            
                echo"<div class=\"listing-section\">";
                        while (($row1 = $query1->fetch_assoc())){
                            $studentNameData= $row1['student_name'];
                            $courseNameData = $row1['course_name'];
                            $sectionData = $row1['section'];
                            $employeeNameData = $row1['employee_name'];
                                echo'<div class="card" style="pointer-events: none;">
                                        <div class="card-content">
                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5>Student Name: <h3>'.$studentNameData.'</h3> </h5>
                                                    </div>
                                                    <div class="col">
                                                        <h5>Course Name: <h3>'.$courseNameData.'</h3></h5>
                                                    </div>
                                                    <div class="col">
                                                        <h5>Section: <h3>'.$sectionData.'</h3></h5>
                                                    </div>
                                                    <div class="col">
                                                        <h5>Employee Name: <h3>'.$employeeNameData.'</h3></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                        }
                    echo"</div>";
            }
        ?>
    </body>
</html>