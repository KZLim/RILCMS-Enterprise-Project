<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width" initial-scale="1.0">
    <link rel="stylesheet" href="./register.css">
    <link rel="stylesheet" href="./payment.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Payment | Student</title>
</head>
<body>
    <div class="paymentformcontainer">
        <h1 class="title">Payment</h1>
        
        <form class="paymentformcontainer" action="" method="">
            <div class="center-div">
                <select class="input" id="selection" name="Course Name">
                    <option selected disabled hidden>Payment Method</option>
                    <option value="Cash">Cash</option>
                    <option value="CardNumber">Card number</option>
                </select>
            </div>

            
            <div id="showCardNumber" class="myDiv">
                <input type="text" class="input" name="cardname" placeholder="Card Holder Name:" required style="margin-left: 110px;">
                <input type="text" class="input" name="cardnumber" placeholder="Card Number:" required style="margin-left: 110px;">
                <input type="text" class="input" name="expirydate" placeholder="Expiry Date:" required style="margin-left: 110px;">
                <input type="text" class="input" name="cvv" placeholder="CVV:" required style="margin-left: 110px;">

            </div>

            <script>
                $(document).ready(function() {
                    $('#selection').on('change', function() { //change event help selection menu 
                        var selectValue = $(this).val();
                        if (selectValue === 'Cash') {
                            alert("Please remember that you have chosen to pay cash at the counter!");
                        }
                    });
                });
            </script>


            <script>
                $(document).ready(function(){ //make the code execute smoothly
                    // Hide the myDiv 
                    $("div.myDiv").hide();

                    $('#selection').on('change', function(){ 
                        var demovalue = $(this).val(); //val assign to the demovalue
                        $("div.myDiv").hide(); //if no choose then hide
                        $("#show"+demovalue).show(); //if choose will showthe div
                    });
                });
            </script>


            <br><br>
               
            <input name="signin" type="submit" value="Submit" class="glowButton" style="margin-left: 175px;">
        </form>
    </div>
    
    
    

</body>
</html>