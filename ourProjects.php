<!DOCTYPE html>

<html>
    <head>
        <title>Our Projects</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="ourProjects.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'header.php';?>
    </head>

   
    <body>
        <!--placeholder for header to fixed. Header is set as position fix, need something to fix on-->
        <div style="height: 15vh">
        </div>

        <div>
            <img src="images/ourproject.jpg" alt="ourprojectimg" width="100%" height="650px" style="filter: blur(1px);">
            <h1 class="image-caption"><b><u>Our Project Archieve</u></b></h1>
            <h2  class="image-caption" style="top: 300px; left:200px">Explore Here to know more !<br/>
                Take a look at our project Archieve <br/></h2>
            <a class="image-caption glowButton" href="#knowMore" style="top: 430px;">Know More</a>
        </div>

        <div class="flex-container" id="knowMore">
            <div class="flex-item-left">
                <img src="images/ourproject-smartAlarmClock.jpg" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #87F6FF; color: #616163;">
                <h2 style="margin-top: 50px;">Smart Alarm Clock</h2>
                <p style="font-size: 25px; padding: 20px;">
                This IoT-based alarm clock functions not only as an alarm clock to wake you up every morning,
                but it can convert into a fully-functional device capable of performing other tasks as well.
                </p>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="background-color: #87F6FF; color: #616163">
                <h2 style="margin-top: 70px;">Smart Parking System</h2>
                <p style="font-size: 25px; padding: 20px;">
                This system uses an IR sensor to monitor the entire area during the run time and provide you with an image for the same.
                This allows you to see any free spaces in the parking lot and drive straight to it without wasting any time looking for a parking space.
                Also, the system is tuned to open the car gate n only if there are empty slots available in a parking space.
                </p>
            </div>

            <div class="flex-item-right">
                <img src="images/ourproject-smartParkingSystem.jpg" height="400px" width="500xp">
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">
                <img src="images/ourproject-smartTheiSystem.jpg" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #87F6FF; color: #616163"> 
                <h2 style="margin-top: 70px;">Smart Anti-Thief System</h2>
                <p style="font-size: 25px; padding: 20px;">
                This IoT-based security system monitors the whole floor for odd movement.
                When switched on, a single movement might activate an alarm, alerting property owners to undesirable guests.
                Like this.  The Piezo sensor is activated when you leave a building.
                monitoring property activity.The sensor sends data to the microcontroller,
                which then signals the camera to take an image of an intruder.
                Users' devices get this photo immediately. 
                </p>

            </div>
        </div>
    </body>
    <?php include 'footer.php';?>
</html>