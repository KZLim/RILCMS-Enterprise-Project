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
        <?php
                echo'<h1 style="text-align: center;">Analytics Panel</h1>';

                $dbc=mysqli_connect("localhost","root","");
                mysqli_select_db($dbc,"rilcms");

                $query1 = mysqli_query($dbc,"SELECT *, COUNT(DISTINCT student_IC) as studentCount FROM student_course GROUP BY branch_name;");
                $query2 = mysqli_query($dbc,"SELECT * FROM (SELECT *, COUNT(*) AS highestCourse, ROW_NUMBER() OVER (PARTITION BY branch_name ORDER BY COUNT(*) DESC) AS row_num FROM student_course GROUP BY branch_name, course_name) AS subquery WHERE row_num = 1;");
                $query3 = mysqli_query($dbc,"SELECT * FROM (SELECT *, COUNT(*) AS leastCourse, ROW_NUMBER() OVER (PARTITION BY branch_name ORDER BY COUNT(*) ASC) AS row_num FROM student_course GROUP BY branch_name, course_name) AS subquery WHERE row_num = 1;");
                $query4 = mysqli_query($dbc,"SELECT ROUND(AVG(student_age),2) as averageAge FROM student;");
                $query5 = mysqli_query($dbc,"SELECT *
                FROM (SELECT *, ROW_NUMBER() OVER (PARTITION BY course_name ORDER BY occurrence DESC) AS row_num FROM (SELECT course_name, section, COUNT(*) AS occurrence FROM student_course GROUP BY course_name, section) AS counted_data) AS subquery WHERE row_num = 1;");


                echo"<div class=\"listing-section\">";
                    echo'<div class="card" style="pointer-events: none; width:95%">';
                        echo'<div class="card-content">
                                <div class="container text-center">
                                    <div class="row">';
                                        while (($row1 = $query1->fetch_assoc())){
                                            $studentCountData= $row1['studentCount'];
                                            $branchNameData = $row1['branch_name'];
                                                echo'<div class="col">
                                                        <h3>'.$branchNameData.'</h3>
                                                        <h4>Total Student Enrolled: '.$studentCountData.'</h4>
                                                    </div>';     
                                        }           
                                    echo"</div>";
                                echo"</div>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";

                echo"<div class=\"listing-section\">";
                    echo'<div class="card" style="pointer-events: none; width:95%">';
                            while (($row1 = $query2->fetch_assoc()) && ($row2 = $query3->fetch_assoc())){
                                $highestCourseData= $row1['highestCourse'];
                                $mostcourseName = $row1['course_name'];
                                $branchNameData = $row1['branch_name'];

                                $leastCourseData= $row2['leastCourse'];
                                $leastcourseName = $row2['course_name'];

                                echo'<div class="card-content">
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <h3>'.$branchNameData.'</h3>
                                                    <h4>Most Enrolled Course: <br/> '.$mostcourseName.' with '.$highestCourseData.' Enrolment</h4>
                                                </div>
                                                <div class="col">
                                                    <h3>'.$branchNameData.'</h3>
                                                    <h4>Least Enrolled Course: <br/> '.$leastcourseName.' with '.$leastCourseData.' Enrolment</h4>
                                                </div>
                                            </div>';
                                    echo"</div>";
                                echo"</div>";
                            }    
                    echo"</div>";
                echo"</div>";

                while (($row1 = $query4->fetch_assoc())){
                    $averageAgeData= $row1['averageAge'];
                        echo'<div class="card" style="pointer-events: none; width: 95%;">
                            <div class="card-content">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Average Age: <h3>'.$averageAgeData.'</h3> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            echo"</div>";

            echo"<div class=\"listing-section\">";
            echo'<div class="card" style="pointer-events: none; width:95%">';
                echo'<div class="card-content">
                        <div class="container text-center">
                            <div class="row">';
                            while (($row1 = $query5->fetch_assoc())){
                                $courseNameData = $row1['course_name'];
                                $test = $row1['section'];
                                    echo'<div class="col">
                                            <h3>'.$courseNameData.'</h3>
                                            <h4>Section with Highest Enrol: '.$test.'</h4>
                                        </div>';     
                                }           
                            echo"</div>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";

        ?>
    </body>
</html>