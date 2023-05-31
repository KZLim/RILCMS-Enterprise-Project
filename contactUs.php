<!DOCTYPE html>

<html>
    <head>
        <title>Thunder Robotics | Contact Us</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="contactUs.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'header.php';?>
    </head>

    <body>
        <!--placeholder for header to fixed. Header is set as position fix, need something to fix on-->
        <div style="height: 15vh">
        </div>

        <div>
            <img src="images/contactus_img1.jpg" alt="firstimg" width="100%" height="650px">
            <h1 class="image-caption"><b>Contact Us</b></h1>
            <h2  class="image-caption" style="top: 270px; left:200px">Hi ,Do you have any question or problem ?<br/>
                Please drop your question and feedback at the <br/> contact form below ~  </h2>
            <a class="image-caption glowButton" href="#contactUs_form" style="top: 400px;">Ask Question ?</a>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">
                <img src="images/interactive class.webp" height="250px" width="400xp" style="margin-top:10px">
                <h1 style="font-size:25px; margin-top: 10px;">
                    Ayer Itam Branch:<br/>
                    43A,Jalan 123<br/>
                    Kawasan Durian,<br/>
                    11600, Ayer Itam <br/>
                    Penang
                </h1>
            </div>

            <div class="flex-item-right">
                <img src="images/interactive class.webp" height="250px" width="400xp" style="margin-top:10px">
                <h1 style="font-size:25px; margin-top: 10px;">
                    Tanjung Bungah Branch:<br/>
                    12C,Jalan Dato In<br/>
                    Taman Hijua Rumput,<br/>
                    11900,Tanjung Bungah,<br/>
                    Penang
                </h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">
                <img src="images/interactive class.webp" height="250px" width="400xp" style="margin-top:10px">
                <h1 style="font-size:25px; margin-top: 10px;">
                    Bayan Lepas Branch:<br/>
                    7A,Jalan 21<br/>
                    Kawasan Komersial,<br/>
                    11600, Bayan Lepas,<br/>
                    Penang
                </h1>
            </div>

            <div class="flex-item-right">
                <img src="images/interactive class.webp" height="250px" width="400xp" style="margin-top:10px">
                <h1 style="font-size:25px; margin-top: 10px;">
                    Kedah Branch:<br/>
                    1A,Lorong 1,<br/>
                    Taman Harmoni,<br/>
                    08911,Sungai Petani,<br/>
                    Kedah
                </h1>
            </div>
        </div>

        <div class="thirdSection" id="contactUs_form" style="padding-top: 15vh; padding-bottom: 15vh;">
                <h1 style="text-align: center;">Q&A</h1>
                <form action="#" method="POST" class="form-container">
                    <input type="text" name="name" class="form-field" placeholder ="Name" required>
                    <input type="email" name="email"  class="form-field" placeholder ="Email" required>
                    <input type="tel" name="contact"  class="form-field" placeholder ="Contact" required>
                    <textarea class="form-field" name="question" placeholder="Ask Your question here:" required></textarea>    
                    <br><br>                   
                    <input name="contactUs_submit" value="Let Us Know" type="submit"  class="glowButton" style="margin-left: 175px; padding: 0px;">
                </form>
        </div>
    </body>
    <?php include 'footer.php';?>
</html>