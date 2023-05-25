<!DOCTYPE html>

<html>
    <head>
        <title>Thunder Robotics | Homepage</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="main_theme.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'header.php';?>
    </head>

    <body>
        <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/robotics class 2.webp" height="650px" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black; position: absolute; right: 45%; left: 45%; bottom: 40vh;">Robotics</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="images/coding class 1.jpg" height="650px" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                    <h1 style="color: black; position: absolute; right: 45%; left: 45%; bottom: 40vh;">Coding</h1>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#featureCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            
            <a class="carousel-control-next" href="#featureCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">
                <img src="images/robotics kit.png" height="500px" width="500px">
            </div>

            <div class="flex-item-right" style="background-color: #3B8BEB; color: white;">
                <h2 style="margin-top: 100px;">Hands - On Learning</h2>
                <p style="font-size: 25px; padding: 20px;">
                    We are a strong believer of learning by doing. Hands on experince is crucial for learning new technology.
                    By doing, it is can spark more interest and creativity. At Thunder Robotics, we have kits for all classes 
                    you register and attend. Letting you on the first hand experience on all our projects.
                </p>

            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="background-color: #3B8BEB; color: white">
                <h2 style="margin-top: 100px;">Interactive Class and Committed Staff</h2>
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
                <img src="images/comfortable environment.jpg" height="400px" width="500xp">
            </div>
            <div class="flex-item-right" style="background-color: #3B8BEB; color: white">
                <h2 style="margin-top: 100px;">Comfortable classrom across all centers</h2>
                <p style="font-size: 25px; padding: 20px;">
                    Comfortable Classroom across all of our centers. Our centers are equip with the upmost comfortable environment
                    for the best learning experience. Every inch of our center are also daily sanatize to ensure safety</p>
                </p>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="background-color: #3B8BEB; color: white">
                <h2 style="margin-top: 100px;">A variation of Courses</h2>
                <p style="font-size: 25px; padding: 20px;">
                    We offer multiple course in our center acorss Penang. We have beginner class for sparking interest to advance
                    classes where we get ready for the real deal. </p>
                </p>
            </div>

            <div class="flex-item-right">
                <img src="images/robotic subject.jpg" height="400px" width="500xp">
            </div>
        </div>

        <div class="thirdSection">
            <h2 style="color: white; padding-top: 40px; text-align: center;">Join Us Today!</h2>
            <p style="font-size: 25px; padding: 20px; text-align: center; color: white;">
                    Quickly, grab a spot with us and join us on our robotics journey</p>
            <a href = "header.php"><button name="gotoRegister" class="glowButton">Register</button></a>
        </div>
    </body>
</html>