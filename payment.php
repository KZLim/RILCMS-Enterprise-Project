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
            
            <form class="paymentformcontainer" action="payment.php" method="POST">
                <div class="center-div">
                    <select class="input" id="paymentSelection" name="paymentMethod">
                        <option selected disabled hidden>Payment Method</option>
                        <option value="Cash">Cash</option>
                        <option value="Card">Card</option>
                    </select>
                </div>

                <div id="showCard" class="myDiv">
                    <input type="text" class="input" name="cardname" placeholder="Card Holder Name:" required style="margin-left: 110px;">
                    <input type="text" class="input" name="cardnumber" placeholder="Card Number:" required style="margin-left: 110px;">
                    <input type="text" class="input" name="expirydate" placeholder="Expiry Date:" required style="margin-left: 110px;">
                    <input type="text" class="input" name="cvv" placeholder="CVV:" required style="margin-left: 110px;">
                </div>

                <script>
                    $(document).ready(function() {
                        $('#paymentSelection').on('change', function() { //change event help selection menu 
                            var selectValue = $(this).val();
                            if (selectValue === 'Cash') {
                                alert("Please remember that you have chosen to pay cash at the counter!");
                                window.location.href = "http://localhost/RILCMS/homepage.php";
                            }
                        });
                    });
                </script>

                <script>
                    $(document).ready(function(){ //make the code execute smoothly
                        // Hide the myDiv 
                        $("div.myDiv").hide();

                        $('#paymentSelection').on('change', function(){ 
                            var demovalue = $(this).val(); //val assign to the demovalue
                            $("div.myDiv").hide(); //if no choose then hide
                            $("#show"+demovalue).show(); //if choose will showthe div
                        });
                    });
                </script>
                
                <br><br>

                <?php
                    error_reporting(E_ERROR | E_PARSE);  //to turn off warning when this is triggered for the second time
                                                        //on display second time, this field is unable to get any data becuase
                                                        //the register page has already pass and is now entering the below isset condition
                                                        //this hidden field is for further passing of the GET data using POST method this time
                    echo'<input type="hidden" name="sName" value="'.$_GET['sName'].'">';
                    echo'<input type="hidden" name="courseName" value="'.$_GET['courseName'].'">';
                ?>
                
                <input name="payment_submit" type="submit" value="Submit" class="glowButton" style="margin-left: 175px;">
            </form>
        </div>

        <?php
            if(isset($_POST['payment_submit'])){
                $paymentMethodData = $_POST['paymentMethod'];

                if($paymentMethodData == "Card"){

                    $dbc=mysqli_connect("localhost","root","");
                    mysqli_select_db($dbc,"rilcms");
                        
                    $sCourseNameData = $_POST['courseName'];

                    //This query 1 is to get the IC of the student. IC is not pass directly from the previous form becuase it is sensitive data
                    $query1 = mysqli_query($dbc,"SELECT student_IC FROM student WHERE student_name = '".$_POST['sName']."'");
                    
                    //Fetch data of query1
                    while ($row = $query1->fetch_assoc()){
                        $sICNumData = $row['student_IC'];
                    }
                    
                    
                    $query = mysqli_query($dbc,"UPDATE student_course set payment_status = 'Paid' WHERE student_IC='".$sICNumData."' 
                                                AND course_name ='".$_POST['courseName']."' ORDER BY ID DESC LIMIT 1");
                    header("Location: homepage.php");
                }
            }
        ?>
    </body>
</html>