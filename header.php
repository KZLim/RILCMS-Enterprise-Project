<!DOCTYPE html>

<html>

    <head>
        <title>Header</title>
        <meta charset = "utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="header_footer.css">
    </head>

    <body>

    
        <div class="header-container">
          <div class="d-flex justify-content-around">
            <div class="header-logo">
              <img src="images/robot icon.png" width="100px" height="100px">
            </div>

            <div class="d-flex align-items-center">
              <div class="d-flex justify-content-center">
                <a href="homepage.php"><div class="p-2">Homepage</div></a>
                <div class="p-2"><a href="programmes.php">Programmes</a></div>
                <div class="p-2"><a href="ourProjects.php">Our Projects</a></div>
                <div class="p-2"><a href="aboutUs.php">About Us</a></div>
                <div class="p-2"><a href="locateUs.php">Locate Us</a></div>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="d-flex justify-content-center">
                <div class="p-2"><a href="register.php">Enrol Now</a></div>
              </div>
            </div>
          </div>
        </div>

        <script>
            // When the user scrolls down 50px from the top of the document, resize the header's font size
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
              if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                var headerElements = document.getElementsByClassName('header-container');
                for(var i=0; i<headerElements.length; i++) { 
                  headerElements[i].style.cssText = "height: 15vh; font-Size: 20px"; 
                } 
              }
              else {
                var headerElements = document.getElementsByClassName('header-container');
                for(var i=0; i<headerElements.length; i++) { 
                  headerElements[i].style.cssText = "height: 17vh; font-Size: 20px"; 
                } 
              }
            }
        </script>
    </body>
</html>