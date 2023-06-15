<html>
    <head>
        <title>Admin | Hardware Management</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="hardware_asset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <?php
            include'admin_header.php';
        ?>
    </head>

    <body>
        <?php

            $dbc=mysqli_connect("localhost","root","");
            mysqli_select_db($dbc,"rilcms");

            //$assetTypeRetrieve = $_GET['assetType'];

            $query1 = mysqli_query($dbc,"SELECT DISTINCT asset_type FROM hardware_asset");
            $query2 = mysqli_query($dbc,"SELECT COUNT(asset_type) as assetCountData FROM hardware_asset GROUP BY asset_type;");
            $query3 = mysqli_query($dbc,"SELECT COUNT(asset_status), sum(case when asset_status = 'Inventory' then 1 else 0 end) AS inInventoryData, sum(case when asset_status = 'Check Out' then 1 else 0 end) AS checkOutData FROM hardware_asset GROUP BY asset_type");
            $query4 = mysqli_query($dbc,"SELECT * FROM hardware_asset WHERE asset_type = '$assetTypeRetrieve'");
            //$query4 = mysqli_query($dbc,"SELECT COUNT(asset_status) as checkOutData FROM hardware_asset WHERE asset_status = 'Check Out' GROUP BY asset_type;");
            //$totalUser = mysqli_query($dbc,"SELECT COUNT(username) as userCount FROM useraccount");
           
           echo"<div class=\"listing-section\">";
                while (($row1 = $query4->fetch_assoc())){
                    $data1= $row1['asset_id'];
                    $data2 = $row1['asset_name'];
                    $data3 = $row1['asset_price'];
                    $data4 = $row1['asset_status'];
                    $data5 = $row1['employee_id'];

                        echo'<div class="card">
                            <div class="card-content">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Asset ID: <h3>'.$data1.'</h3> </h5>
                                        </div>
                                        <div class="col">
                                            <h5>Asset Name: <h3>'.$data2.'</h3></h5>
                                        </div>
                                        <div class="col">
                                            <h5>Asset Price: <h3>'.$data3.'</h3></h5>
                                        </div>
                                        <div class="col">
                                            <h5>Asset Status: <h3>'.$data4.'</h3></h5>
                                        </div>
                                        <div class="col">
                                            <h5>Holder: <h3>'.$data5.'</h3></h5>
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