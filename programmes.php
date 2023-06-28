<!DOCTYPE html>

<html>
    <head>
        <title>Thunder Robotics | Programmes</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="programmes.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'header.php';?>
    </head>

    <body>
        <!--placeholder for header to fixed. Header is set as position fix, need something to fix on-->
        <div style="height: 15vh">
        </div>

        <div>
            <img src="images/programmes_img1.jpg" alt="programmesimg" width="100%" height="650px" style="filter: blur(1px);">
            <h1 class="image-caption"><b><u>Our Programmes Course</u></b></h1>
            <h2  class="image-caption" style="top: 300px; left:200px">Want to see more our programme course ?<br/>
                Take a look at our programmes course <br/> See what we have in provided. </h2>
            <a class="image-caption glowButton" href="#knowMore" style="top: 430px;">Know More</a>
        </div>

        <div class="flex-container" id="knowMore">
            <div class="flex-item-left">
                <img src="images/programmes-powerElectronic.jpg" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #87F6FF; color: #616163;">
                <h2 style="margin-top: 50px;font-weight:bold;text-align:left;padding-left:30px;">Robotic Entry Level</h2>
                <h3 style="font-size:25px;text-align:left;padding-left:30px;">Course Review</h3>
                <p style="font-size: 25px;">
                    <ul class="list">
                        <li>Provided lesson of math and science concepts.</li>
                        <li>Provide fully face to face time with student.</li>
                        <li>Learning basic level of the robotic lesson. </li>
                        <li>Provide mini-project for student to challenge.</li>
                        <li>Monday | 9 am - 11 am</li>
                        <li>Wednesday | 12 pm - 3 pm</li>
                        <li>Thursday | 1 pm - 4 pm</li>
                        
                   </ul>
                </p>
                <a class="click-button" href="register.php">Register Now</a>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="background-color: #87F6FF; color: #616163">
                <h2 style="margin-top: 50px;font-weight:bold;text-align:left;padding-left:30px;">Robotics Advanced Level</h2>
                <h3 style="font-size:25px;text-align:left;padding-left:30px;">Course Review</h3>
                <p style="font-size: 25px; ">
                   <ul class="list">
                        <li>Advanced concepts and techniques in robotics.</li>
                        <li>In-depth exploration of robotic programming and control.</li>
                        <li>Hands-on projects to apply advanced robotics knowledge.</li>
                        <li>Introduction to artificial intelligence in robotics.</li>
                        <li>Collaborative team projects to enhance problem-solving skills.</li>
                        <li>Monday | 9 am - 11 am</li>
                        <li>Wednesday | 12 pm - 3 pm</li>
                        <li>Thursday | 1 pm - 4 pm</li>
                   </ul>
                </p>
                <a class="click-button" href="register.php">Register Now</a>
            </div>

            <div class="flex-item-right">
                <img src="images/programmes-mechanicalEngineering.jpg" height="400px" width="500xp">
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">
                <img src="images/programmes-ArduinoClass.jpg" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #87F6FF; color: #616163"> 
                <h2 style="margin-top: 50px;font-weight:bold;text-align:left;padding-left:30px;">Arduino Class</h2>
                <h3 style="font-size:25px;text-align:left;padding-left:30px;">Course Review</h3>
                <p style="font-size: 25px;">
                    <ul class="list">
                        <li>Introduction to Arduino platform and its components.</li>
                        <li>Hands-on projects to learn basic electronics and programming concepts.</li>
                        <li>Building and programming Arduino circuits.</li>
                        <li>Exploring various sensors, actuators, and modules compatible with Arduino.</li>
                        <li>Creating interactive projects and prototypes.</li>
                        <li>Monday | 9 am - 11 am</li>
                        <li>Wednesday | 12 pm - 3 pm</li>
                        <li>Thursday | 1 pm - 4 pm</li>
                   </ul>
                </p>
                <a class="click-button" href="register.php">Register Now</a>
            </div>
        </div>
    </body>
    <?php include 'footer.php';?>
</html>