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

    <body style="background-color: #daf5ff;"> 
        <?php

            $dbc=mysqli_connect("localhost","root","");
            mysqli_select_db($dbc,"rilcms");

            $query1 = mysqli_query($dbc,"SELECT * FROM software_asset");
            ///$query2 = mysqli_query($dbc,"SELECT COUNT() as assetCountData FROM hardware_asset GROUP BY asset_type;");
            //$query3 = mysqli_query($dbc,"SELECT COUNT(asset_status), sum(case when asset_status = 'Inventory' then 1 else 0 end) AS inInventoryData, sum(case when asset_status = 'Check Out' then 1 else 0 end) AS checkOutData FROM hardware_asset GROUP BY asset_type");
            //$query4 = mysqli_query($dbc,"SELECT COUNT(asset_status) as checkOutData FROM hardware_asset WHERE asset_status = 'Check Out' GROUP BY asset_type;");
            //$totalUser = mysqli_query($dbc,"SELECT COUNT(username) as userCount FROM useraccount");
            

           
           echo"<div class=\"listing-section\">";
                while (($row1 = $query1->fetch_assoc())){
                    $softwafeNameData= $row1['software_name'];
                    $totalEntitlementData = $row1['total_entitlement'];
                    $softwareStatusData = $row1['software_status'];
                        echo'<div class="card"><a href="software_list.php?softwareName='.$softwafeNameData.'">
                            <div class="card-content">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Software Name: <h3>'.$softwafeNameData.'</h3> </h5>
                                        </div>
                                        <div class="col">
                                            <h5>Total Entitlement: <h3>'.$totalEntitlementData.'</h3></h5>
                                        </div>
                                        <div class="col">
                                            <h5>Software Status: <h3>'.$softwareStatusData.'</h3></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>';
                }
            echo"</div>";
            ?>
    </body>
</html>