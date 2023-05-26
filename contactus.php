<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | Student</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="contactus.css">
        <link rel="stylesheet" href="main_theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php include 'header.php';?>
    </head>
    <body>

        <div class="imageOuterContainer" style="margin-top:15vh" >
            <img src="images/contactus_img1.jpg" class="img_class1"  alt="firstimg" width="100%" height="650px">
            <div class="outerText">
                <h1 class="text1"><b>Contact Us</b></h1>
                <h2   class="text2">Hi ,do have any question or problem ?  </h2>
                <h2 class="text3">Please drop your question and feedback at the contact form below ~ </h2>
                <a class="scrollbutton" href="#outer_container" style="text-align:center">Ask Question ?</a>
            </div>
        </div>
        <div class="address-flex-container">
            <div class="flex-item-left" style="font-size:20px;padding:20px;color:black;background:#E7E3D4">
                <h1 style="font-size:25px;">
                    Ayer Itam Branch:<br/>
                    43A,Jalan 123<br/>
                    Kawasan Durian,<br/>
                    11600,Penang
                </h1>
            </div>
            <div class="flex-item-right" style="font-size:20px;padding:20px;color:black;background:#E7E3D4">
                <h1 style="font-size:25px;">
                    Bayan Lepas Branch:<br/>
                    7A,Jalan 21<br/>
                    Kawasan Komersial,<br/>
                    11600,Penang
                </h1>
            </div>
        </div>

        <div class="address-flex-container">
            <div class="flex-item-left" style="font-size:20px;padding:20px;color:black;background:#E7E3D4">
                <h1 style="font-size:25px;">
                    Mainland Branch:<br/>
                    12C,Jalan Dato In<br/>
                    Bukit Mertajam,<br/>
                    11900,Penang
                </h1>
            </div>
            <div class="flex-item-right" style="font-size:20px;padding:20px;color:black;background:#E7E3D4">
                <h1 style="font-size:25px;">
                    Kedah Branch:<br/>
                    1A,Lorong 1,<br/>
                    Taman Harmoni,<br/>
                    08911,Sungai Petani,Kedah
                </h1>
            </div>
        </div>
        <div class="outercontainer" id="outer_container">
            <div class="formdiv" style="text-align: center;">
                <h1 class="title">Q&A</h1>
                <form action="#" method="POST" class="formdivInner">
                    <input type="text" name="name" class="formField" placeholder ="Name" required>
                    <input type="email" name="email"  class="formField" placeholder ="Email" required>
                    <input type="tel" name="contact"  class="formField" placeholder ="Contact" required>
                    <textarea class="formField" name="question" placeholder="Ask Your question here:" required></textarea>    
                    <br><br>                   
                    <input name="Submit" type="submit" value="Submit" class="glowButton" style="margin-left: auto;margin-right:auto;" >
                </form>
            </div>
        </div>
        
        
        
    </body>
    <?php include 'footer.php';?>
</html>