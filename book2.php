<?php 
session_start();

$server = "localhost:3307";
$username = "root";
$password ="";
$dbname = "showroom";

$name = $_SESSION['name'];
$mob =  $_SESSION['mob'];
$addr =  $_SESSION['addr'];
$vehNo =  $_SESSION['vehNo'];
$vehType = $_SESSION['vehType'];
$_SESSION['vehName'] = $_POST['vehName'];
$vehName = $_POST['vehName'];
$timeSlot = $_POST['timeSlot'];
$_SESSION['op'] = $_POST['op'];
$serviceType = $_POST['op'];
$date = $_POST['date'];

$c_id = $Fc_id = $ap_id = $Fc_id1 =0;

$conn = mysqli_connect($server , $username , $password , $dbname);
    
    $a = "select * from customer";
    
    $result = mysqli_query($conn,$a);
    if($result)
    {
        $row = mysqli_num_rows($result);
        if($row)
        {
            $c_id = $row;
        }
    }

    $Fc_id = $c_id + 1;

    $query1 = "insert into customer values($Fc_id,'$name','$addr','$mob')";

            $b = "select * from appointment";
            
            $result1 = mysqli_query($conn,$b);
            if($result1)
            {
                $row1 = mysqli_num_rows($result1);
                if($row1)
                {
                    $ap_id = $row1;
                }
            }
            $Fc_id1 = $ap_id + 1;
   $query2 =  "insert into appointment values($Fc_id1,$Fc_id,'$vehNo','$vehType','$vehName','$timeSlot','$serviceType','$date','Not Completed')";
   $run = mysqli_query($conn,$query1) or die(mysqli_error());
   $run1 = mysqli_query($conn,$query2) or die(mysqli_error());
    if($run && $run1){
            echo"<center style='color:white; font-size:25px;'>";
            echo "<h1>Booking Confirmed...!</h1>";
            echo "<h2>Thank You For Choosing Shaurya Motors</h2>";
            echo "Stay Connected we'll Deliver your Vehicle After 2 Hours from your Time Slot";
            echo "<br><br><b>Check Your Details as Below-</b>";
            echo "<br>Customer ID : ".$Fc_id;
            echo "<br>Name : ".$name;
            echo "<br>Mobile Number : ".$mob;
            echo "<br>Address : ".$_SESSION['addr'];
            echo "<br>Vehicle No : ".$_SESSION['vehNo'];
            echo "<br>Your Time Slot : ".$_POST['timeSlot'];
            echo "<br><br>(<b>Note :</b> Keep Safe Above All Details for Future References.)";            
    }
    else{
        echo "<h1>Form not submitted...!<br>";
        echo "Try Again with Valid Credentials";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Choosing Shaurya Motors</title>
</head>
<body  style="background: linear-gradient(110deg, rgba(2,0,36,1) 0%, rgba(0,16,19,1) 47%, rgba(192,192,192,1) 100%);">
    <br><br>
    <a href="home.html" style="color:white;">Back To Home</a>
</body>
</html><table><tr><td>shaurya Motors</td></tr></table>