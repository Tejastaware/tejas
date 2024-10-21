<?php 
session_start();
$_SESSION['cid'] = $_POST['cid'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['mob'] = $_POST['mob'];
$_SESSION['addr'] = $_POST['addr'];
$_SESSION['vehNo'] = $_POST['vehNo'];
$_SESSION['vehType'] = $_POST['vehType'];
//echo $_SESSION['vehType'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(2)Book Your Appoinment with Shaurya  Motors</title>
    <link rel="stylesheet" href="exBook1.css">
</head>
<body style="background-color: rgb(245, 245, 181);">
    <form action="exBook2.php" method="post">
    <div class="wrapper">
            <div class="title">
              Book Appoinment
            </div>
            <div class="form">
               <div class="inputfield">
                  <label>Select Time Slot :</label>
                  <select name="timeSlot" required="required">
            <option value="10AM-2PM">10 AM -12 PM</option>
            <option value="12PM-2PM">12 PM -2 PM</option>
            <option value="3PM-4PM">3 PM -4 PM</option>
            <option value="4PM-6PM">4 PM -6 PM</option>
        </select>
               </div>   
                
             <div class="inputfield">
                <label>Select Date For Servicing :</label>
                <input type="date" name="date" required="required">
             </div>
             
             <div class="inputfield">
                 
                  <label style="white-space:nowrap">Select Type of<br>Servicing :</label>
                  <input type="radio" name="op" class="radio" value="Full" required="required">Full Servicing (Service,Oil,Washing,etc.) <br>
        <input type="radio" name="op" class="radio" value="Half" required="required">Half Servicing (Service,Oil,etc.)
               </div>
             
                <div class="inputfield">
                  <label>Enter Vehicle Name :</label>
                  <input type="text" name="vehName" id="vehName" placeholder="   eg. Honda City, Bajaj Pulsar" required="required">
               </div> 
                             
                <div class="inputfield">
                <input type="submit" value="Submit" class="btn">
              </div>
            </div>
        </div>	
        </form>
</body>
</html>