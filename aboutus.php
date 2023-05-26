<!DOCTYPE html>

<html>
    <head>
        <title>About Us | Student</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="aboutus.css">
        <link rel="stylesheet" href="main_theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'header.php';?>
        
    </head>
    <body>

        <div class="imageOuterContainer" style="margin-top:15vh" >
            <img src="images/about_us_img.jpg" class="img_class1"  alt="firstimg" width="100%" height="600px">
            <div class="outerText">
                <h1 class="text1"><b>About Us</b></h1>
                <h2   class="text2">We are giving technology eduction, </h2>
                <h2 class="text3">This will prepared for children to change the world generation.</h2>
                <a class="scrollbutton" href="#toview" style="text-align:center">To View</a>
            </div>
        </div>

        <div class="flex-container" id="toview">
            <div class="flex-item-left">
                <img src="images/lecturer.png"alt="secondimg" width="500px" height="350px">  
            </div>

            <div class="flex-item-right" style="font-size:20px;padding:20px;color:white;background:#3b8beb">
                We have qualified and potential teachers. They also have to give enough patience to teach students.
                They also sincerely want to impart scientific and technological knowledge to students
                because this can bring about a different impact on the world, no matter in technology or knowledge
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left" style="font-size:20px;padding:20px;color:white;background:#3b8beb">
                We have provided fully equipment and comfortable
                environment which suitbale for student to learning .
                The environment of the class are surrounding with the robotic and Iot equipment.
            </div>
            <div class="flex-item-right">
                <img src="images/robotics class 2.webp"alt="thirdimg"width="500px">
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left"><img src="images/aboutus2.webp"alt="fourthimg" width="450px">
        </div>
            <div class="flex-item-right" style="font-size:20px;padding:20px;color:white;background:#3b8beb">
                We have provided the equipment for student to rent and use during class,
                the student can use the equipment and borrow it to home in 
                due date which have been set.
            </div>
        </div>

        

        
        
            
       
        
       
        
        
        
        
    </body>
    <?php include 'footer.php';?>
</html>