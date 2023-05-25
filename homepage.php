<!DOCTYPE html>

<html>
    <head>
        <title>Hello World</title>
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
            <div class="flex-item-left">1</div>
            <div class="flex-item-right">2</div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">1</div>
            <div class="flex-item-right">2</div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">1</div>
            <div class="flex-item-right">2</div>
        </div>

        <div class="flex-container">
            <div class="flex-item-left">1</div>
            <div class="flex-item-right">2</div>
        </div>

        <div class="thirdSection">
            <h1>test</h1>
        </div>
    </body>
</html>