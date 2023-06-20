<html>

    <head>
        <title>Admin Header</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="admin_header.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            session_start();
            $roleCheck = substr($_SESSION['identifier_id'],0,1);

            if($roleCheck == "A"){
                echo'<div class="header">
                    <div class="d-flex justify-content-between">
                        <a href="admin_dashboard.php"><image src="images/back icon2.png" width="60px" height="70px" class="header-icon"></a>
                        <h1 style="color: white; text-align:center;" class="title">Admin Dashboard</h1>
                        <h1 style="color: white; padding-right: 5px;" class="title"><a href="logout.php">Logout</a></h1>
                    </div>
                </div>';
            }
            else if($roleCheck == "T"){
                echo'<div class="header">
                    <div class="d-flex justify-content-between">
                        <a href="teacher_dashboard.php"><image src="images/back icon2.png" width="60px" height="70px" class="header-icon"></a>
                        <h1 style="color: white; text-align:center;" class="title">Admin Dashboard</h1>
                        <h1 style="color: white; padding-right: 5px;" class="title"><a href="logout.php">Logout</a></h1>
                    </div>
                </div>';
            }
            
        ?>
    </body>
</html>