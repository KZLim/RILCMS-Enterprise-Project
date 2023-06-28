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
                <p style="font-size: 25px;">
                    <ul class="list">
                        <li>Created an IoT-based alarm clock with customizable features.</li>
                        <li>Enabled multi-functionality for various tasks beyond waking up.</li>
                        <li>Intuitive user interface for easy setup and customization.</li>
                        <li>Seamless connectivity with other smart devices.</li>
                        <li>Real-time weather information and personalized wake-up routines.</li>
                        <li>Smart analysis of sleep patterns for better sleep quality.</li>
                        
                    </ul>
                </p>
                <h3 class="Developer">Developers : Kayson , Sam</h3>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="background-color: #87F6FF; color: #616163">
                <h2 style="margin-top: 70px;">Smart Parking System</h2>
                <p style="font-size: 25px; ">
                <ul class="list">
                    <li>Developed an IoT-based system for efficient parking management.</li>
                    <li>Utilized IR sensors to monitor and detect available parking spaces in real-time.</li>
                    <li>Provided users with a visual representation of parking availability.</li>
                    <li>Automated car gate opening based on available parking slots.</li>
                    <li>Enhanced overall parking efficiency and reduced traffic congestion.</li>
                        
                   </ul>
                </p>
                <h3 class="Developer">Developers : JohnRison , Winson</h3>
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
                <p style="font-size: 25px; ">
                <ul class="list">
                    <li>Monitors the entire floor for odd movement.</li>
                    <li>Activates an alarm when detecting unwanted guests.</li>
                    <li>Utilizes a Piezo sensor to detect movements when leaving a building.</li>
                    <li>Captures an image of an intruder using a connected camera.</li>
                    <li>Instantly sends the captured photo to users' devices.</li>
                        
                   </ul>
                </p>
                <h3 class="Developer">Developers : Vincent , Elma</h3>
            </div>
        </div>
    </body>
    <?php include 'footer.php';?>
</html>