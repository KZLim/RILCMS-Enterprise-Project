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
                <h2 style="margin-top: 50px;">Power Electronic</h2>
                <p style="font-size: 25px; padding: 20px;">
                Power electronics is the branch of electrical engineering that deals with
                the processing of high voltages and currents to deliver power that supports a variety of needs. 
                </p>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="background-color: #87F6FF; color: #616163">
                <h2 style="margin-top: 70px;">Mechanical Engineering</h2>
                <p style="font-size: 25px; padding: 20px;">
                Mechanical engineering is a multidisciplinary and diverse course
                that involves the understanding of objects and systems in their movements.
                </p>
            </div>

            <div class="flex-item-right">
                <img src="images/programmes-mechanicalEngineering.jpg" height="400px" width="500xp">
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">
                <img src="images/programmes-electricDrives.jpg" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #87F6FF; color: #616163"> 
                <h2 style="margin-top: 70px;">Electric Drives</h2>
                <p style="font-size: 25px; padding: 20px;">
                Electric drives are flexible because their performance can be controlled effectively
                by using electronic devices such as SCRs, IGBTs and microcontrollers.
                Available in wide range of torque, speed and power.
                Compact in size; electric drives occupy less space.
                </p>
            </div>
        </div>
    </body>
    <?php include 'footer.php';?>
</html>