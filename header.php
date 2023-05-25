<!DOCTYPE html>

<html>

    <head>
        <title>Header</title>
        <meta charset = "utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="header_footer.css">
    </head>

    <body>
        <div class="headerContainer">
          <table class="headerGrid">
            <tr>
              <td class="innerGrid"><a href="homepage.php">Home</a></td>
              <td class="innerGrid"><a href="#">Programmes</a></td>
              <td class="innerGrid"><a href="#">Our Projects</a></td>
              <td class="innerGrid"><a href="#">About Us</a></td>
              <td class="innerGrid"><a href="#">Contact Us</a></td>
              <td class="innerGrid" style="padding-left: 370px"><a href="register.php">Register</a></span></td>
            </tr>
          </table>
        </div>

        <script>
            // When the user scrolls down 50px from the top of the document, resize the header's font size
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
              if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                var headerElements = document.getElementsByClassName('headerContainer');
                for(var i=0; i<headerElements.length; i++) { 
                  headerElements[i].style.cssText = "height: 10vh; font-Size: 20px"; 
                } 

                var headerGridElements = document.getElementsByClassName('headerGrid');
                for(var i=0; i<headerGridElements.length; i++) { 
                  headerGridElements[i].style.cssText = "margin-top: 20px"; 
                } 

              }
              else {
                var headerElements = document.getElementsByClassName('headerContainer');
                for(var i=0; i<headerElements.length; i++) { 
                  headerElements[i].style.cssText = "height: 15vh; font-Size: 20px"; 
                } 

                var headerGridElements = document.getElementsByClassName('headerGrid');
                for(var i=0; i<headerGridElements.length; i++) { 
                  headerGridElements[i].style.cssText = "margin-top:40px"; 
                } 
              }
            }
        </script>
    </body>
</html>