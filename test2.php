<html>

    <head>
        <title>Admin | Dashboard</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="admin_theme.css">
        <link rel="stylesheet" href="form.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            $query4 = mysqli_query($dbc,"SELECT student_age FROM student");
            /**$query5 = mysqli_query($dbc,"SELECT *
            FROM (SELECT *, ROW_NUMBER() OVER (PARTITION BY course_name ORDER BY occurrence DESC) AS row_num FROM (SELECT course_name, section, COUNT(*) AS occurrence FROM student_course GROUP BY course_name, section) AS counted_data) AS subquery WHERE row_num = 1;");**/
            $firstGraph = array();
            $secondGraph = array();
            $thirdGraph = array();
                
            while (($row1 = $query1->fetch_assoc())) {
                $studentCountData = $row1['studentCount'];
                $branchNameData = $row1['branch_name'];
                
                $dataPoint = array(
                    "label" => $branchNameData,
                    "yValue" => $studentCountData
                );    
                
                array_push($firstGraph, $dataPoint);
            }
            $jsonData = json_encode($firstGraph);        
                                    

            while (($row1 = $query2->fetch_assoc()) && ($row2 = $query3->fetch_assoc())) {
                $highestCourseData = $row1['highestCourse'];
                $mostcourseName = $row1['course_name'];
                $branchNameData = $row1['branch_name'];
    
                $leastCourseData = $row2['leastCourse'];
                $leastcourseName = $row2['course_name'];
    
                $dataPoint = array(
                    "label" => $branchNameData,
                    "yValue" => $highestCourseData,
                    "yValue2" => $leastCourseData,
                    "mostCourseLabel" => $mostcourseName,
                    "leastCourseLabel" => $leastcourseName

                );
                array_push($secondGraph, $dataPoint);
            }       
            $jsonData2 = json_encode($secondGraph);        


            while (($row1 = $query4->fetch_assoc())){
                $ageData= $row1['student_age'];
                    
                $dataPoint = array(
                    "label" => "Student Age",
                    "yValue" => $ageData
                );
                array_push($thirdGraph, $dataPoint);    
            }
            $jsonData3 = json_encode($thirdGraph);        


            /**echo"<div class=\"listing-section\">";
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
            echo"</div>";**/

        ?>

        <canvas id="myChart1" style="margin-top: 70px;"></canvas>
        <script>
            var dataPoints = <?php echo $jsonData; ?>;

        // Create a new Chart instance
        var ctx1 = document.getElementById('myChart1').getContext('2d');
        var chart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: dataPoints.map(dataPoint => dataPoint.label),
                datasets: [{
                    label: 'Total Student',
                    data: dataPoints.map(dataPoint => dataPoint.yValue),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Set default background color
                    borderColor: 'rgba(75, 192, 192, 1)', // Set default border color
                    borderWidth: 1, // Set default border width
                    hoverBackgroundColor: 'rgba(75, 192, 192, 0.5)', // Set hover background color
                }],
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        suggestedMax: Math.max(...dataPoints.map(dataPoint => dataPoint.yValue)),               
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Total Student by Branch',
                        size: 40,
                        color: 'black',

                        font: {
                            size: 30,
                        }
                    }
                }
            }
        });
        </script>


        <canvas id="myChart2"></canvas>
        <script>
            var dataPoints2 = <?php echo $jsonData2; ?>;

        // Create a new Chart instance
        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var chart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: dataPoints2.map(dataPoint => dataPoint.label),
                datasets: [{
                    label: 'Most Enrolled Course by Branch',
                    data: dataPoints2.map(dataPoint => dataPoint.yValue),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Set default background color
                    borderColor: 'rgba(75, 192, 192, 1)', // Set default border color
                    borderWidth: 1, // Set default border width
                    hoverBackgroundColor: 'rgba(75, 192, 192, 0.5)', // Set hover background color
                },
                {
                        label: 'Least Enrolled Course by Branch',
                        data: dataPoints2.map(dataPoint => dataPoint.yValue2),
                        backgroundColor: 'rgba(192, 75, 192, 0.2)', // Set desired background color for data 2
                        borderColor: 'rgba(192, 75, 192, 1)', // Set desired border color for data 2
                        borderWidth: 1 // Set desired border width for data 2
                }]
                
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        suggestedMax: Math.max(...dataPoints2.map(dataPoint => Math.max(dataPoint.yValue2, dataPoint.yValue3)))                 
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            
                            label: function(context) {
                                var datasetIndex = context.datasetIndex;
                                var dataIndex = context.dataIndex;
                                var dataPoint = dataPoints2[dataIndex];
                                if (datasetIndex === 1) {
                                    return "Data 2: " + dataPoint.leastCourseLabel; // Set hover indicator name for Data 2
                                }
                                return "Data 1: " + dataPoint.mostCourseLabel; // Set hover indicator name for Data 1
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'Most and Least Enrolled Course by Branch',
                        size: 40,
                        color: 'black',

                        font: {
                            size: 30,
                        }
                    }
                }
            }
        });
        </script>


        <canvas id="myChart3" style="width: 300px; height: 300px"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var dataPoints = [
                { label: "7-12", min: 7, max: 12, count: 0 },
                { label: "13-17", min: 13, max: 17, count: 0 },
                { label: "18-21", min: 18, max: 21, count: 0 },
                { label: "22+", min: 22, max: 25, count: 0 },
            ];

            var jsonData = <?php echo $jsonData3; ?>;

            jsonData.forEach(function(dataPoint) {
                var age = dataPoint.yValue;
                dataPoints.forEach(function(range) {
                    if (age >= range.min && age <= range.max) {
                        range.count++;
                    }
                });
            });

            var ctx = document.getElementById('myChart3').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: dataPoints.map(dataPoint => dataPoint.label),
                    datasets: [{
                        data: dataPoints.map(dataPoint => dataPoint.count),
                        backgroundColor: getBackgroundColor(),
                    }],
                },
                options: {
                    responsive: true,
                    layout: {
                        padding: 250,     // Adjust the padding
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Age Group Distribution',
                            color: 'black',
                            font: {
                                size: 50,
                            }
                        },
                        legend: {
                            position: 'bottom',
                        },
                    },
                },
            });

            function getBackgroundColor() {
                var colors = [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                ];
                return colors;
            }
        </script>
    </body>
</html>


          