<html>

    <head>
        <title>Admin | Employee List</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="hardware_asset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <style>
            .card {
                margin-bottom: 30px;
            }
        </style>

        <?php
            include'admin_header.php';
        ?>
    </head>

    <body style="background-color: #daf5ff;">
        <?php

            $dbc=mysqli_connect("localhost","root","");
            mysqli_select_db($dbc,"rilcms");

            $assetTypeRetrieve = $_GET['assetType'];

            $query = mysqli_query($dbc,"SELECT * FROM employee");
            

           
           echo"<div class=\"listing-section\">";
                while (($row1 = $query->fetch_assoc())){
                    $data1= $row1['employee_ID'];
                    $data2 = $row1['employee_name'];
                    $data3 = $row1['employee_contact'];
                    $data4 = $row1['employee_address'];
                    $data5 = $row1['employee_branch'];
                    $data6 = $row1['course_teach'];

                    echo'<div class="card">
                            <div class="card-content">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Employee ID: <h3>'.$data1.'</h3> </h5>
                                        </div>
                                        <div class="col">
                                            <h5>Employee Name: <h3>'.$data2.'</h3></h5>
                                        </div>
                                        <div class="col">
                                            <h5>Employee Branch: <h3>'.$data5.'</h3></h5>
                                        </div>
                                        <div class="col">
                                            <h5>Course: <h3>'.$data6.'</h3></h5>
                                        </div>
                                    </div>
                                    <br/><br/>
                                    <div class="row">
                                        <div class="col">
                                            <h5>Employee Contact: <h3>'.$data3.'</h3></h5>
                                        </div>
                                        <div class="col">
                                                <h5>Employee Address: <h3>'.$data4.'</h3></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            echo"</div>";
            ?>
    </body>
</html>