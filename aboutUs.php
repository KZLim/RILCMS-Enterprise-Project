<!DOCTYPE html>

<html>
    <head>
        <title>Thunder Robotics | About Us</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="aboutUs.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'header.php';?>
    </head>

    <body>
        <!--placeholder for header to fixed. Header is set as position fix, need something to fix on-->
        <div style="height: 15vh">
        </div>

        <div>
            <img src="images/about_us_img.jpg" alt="firstimg" width="100%" height="650px" style="filter: blur(1px);">
            <h1 class="image-caption"><b><u>About Us</u></b></h1>
            <h2  class="image-caption" style="top: 300px; left:200px">Want to Know More About Us ?<br/>
                Take a look at our legacy and what we aim to built<br/> See what we have in stored. </h2>
            <a class="image-caption glowButton" href="#knowMore" style="top: 430px;">Know More</a>
        </div>

        <div class="flex-container" id="knowMore">
            <div class="flex-item-left">
                <img src="images/aboutus-ourmission.jpg" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #87F6FF; color: #616163;">
                <h2 style="margin-top: 50px;">Our Mission</h2>
                <p style="font-size: 25px;">
                    <ul class="list">
                        <li>Empowering individuals for future technological advancements.</li>
                        <li>Offering a collaborative learning environment.</li>
                        <li>Equipping students with hands-on practical skills.</li>
                        <li>Providing comprehensive IoT robotic education.</li>
                        
                    </ul>
                </p>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="background-color: #87F6FF; color: #616163">
                <h2 style="margin-top: 70px;">Our Team</h2>
                <p style="font-size: 25px; ">
                    <ul class="list">
                        <li>We have provided quality lecturer to teach and share learning knowledge.</li>
                        <li>Strong communication and interpersonal skills.</li>
                        <li>Providing individualized attention and guidance.</li>
                        <li>Inspiring and motivating students to reach their full potential.</li>
                        
                    </ul>
                </p>
            </div>

            <div class="flex-item-right">
                <img src="images/ourteacher.jpg" height="400px" width="500xp">
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">
                <img src="images/asset.jpg" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #87F6FF; color: #616163"> 
                <h2 style="margin-top: 70px;">Our Asset Equipment & Software</h2>
                <p style="font-size: 25px; ">
                    <ul class="list">
                        <li>We have provided asset equipment and software for student to use.</li>
                        <li>High-performance computers and workstations.</li>
                        <li>Advanced sensors and actuators for robotics applications.</li>
                        <li>Industry-standard software for CAD/CAM and design.</li>
                        
                    </ul>
                </p>
            </div>
        </div>
    </body>
    <?php include 'footer.php';?>
</html>