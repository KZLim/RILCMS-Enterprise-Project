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
            <img src="images/about_us_img.jpg" alt="firstimg" width="100%" height="650px" style="filter: blur(5px);">
            <h1 class="image-caption"><b><u>About Us</u></b></h1>
            <h2  class="image-caption" style="top: 300px; left:200px">Want to Know More About Us ?<br/>
                Take a look at our legacy and what we aim to built<br/> See what we have in stored. </h2>
            <a class="image-caption glowButton" href="#knowMore" style="top: 430px;">Know More</a>
        </div>

        <div class="flex-container" id="knowMore">
            <div class="flex-item-left">
                <img src="images/interactive class.webp" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #44FFD2; color: #616163;">
                <h2 style="margin-top: 50px;">Hands - On Learning</h2>
                <p style="font-size: 25px; padding: 20px;">
                    We are a strong believer of learning by doing. Hands on experince is crucial for learning new technology.
                    By doing, it is can spark more interest and creativity. At Thunder Robotics, we have kits for all classes 
                    you register and attend. Letting you on the first hand experience on all our projects.
                </p>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="background-color: #44FFD2; color: #616163">
                <h2 style="margin-top: 70px;">Interactive Class and Committed Staff</h2>
                <p style="font-size: 25px; padding: 20px;">
                    We as technology and robotics lover too are committed to bringing the very best class experience to you
                    and you kid. Every staff of our center are profesionnaly trained and has experience in the field for
                    more than 3 years.
                </p>
            </div>

            <div class="flex-item-right">
                <img src="images/interactive class.webp" height="400px" width="500xp">
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">
                <img src="images/interactive class.webp" height="400px" width="500xp">
            </div>

            <div class="flex-item-right" style="background-color: #44FFD2; color: #616163"> 
                <h2 style="margin-top: 70px;">Interactive Class and Committed Staff</h2>
                <p style="font-size: 25px; padding: 20px;">
                    We as technology and robotics lover too are committed to bringing the very best class experience to you
                    and you kid. Every staff of our center are profesionnaly trained and has experience in the field for
                    more than 3 years.
                </p>
            </div>
        </div>
    </body>
    <?php include 'footer.php';?>
</html>