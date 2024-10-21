<?php 
session_start();

$host = "localhost:3307";
$server = "localhost:3307";
$username = "root";
$password ="";
$dbname = "showroom";

$cid = $_SESSION['cid'];
$name = $_SESSION['name'];
$mob =  $_SESSION['mob'];
$addr =  $_SESSION['addr'];
$vehNo =  $_SESSION['vehNo'];
$vehType = $_SESSION['vehType'];
$vehName = $_POST['vehName'];
$timeSlot = $_POST['timeSlot'];
$serviceType = $_POST['op'];
$date = $_POST['date'];

$flag = 0;

try{
    $connect=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    }
    catch(PDOException $e)
    {
        echo "Connection Failed: ".$e->getMessage();
        die();
    }
    $s ="select * from customer";
    foreach($connect->query($s) as $r)
    {
        if($r['cid']==$cid && $r['cname']==$name && $r['mob']==$mob)
        {
            $c_id =$Fc_id=$ap_id =$Fc_id1 =0;


$conn = mysqli_connect($server, $username, $password, $dbname);
    
    $b = "select * from appointment";
    
    $result1 = mysqli_query($conn,$b);
    if($result1)
    {
        $row1 = mysqli_num_rows($result1);
        if($row1)
        {
            $apid = $row1;
        }
    }

    $Fc_id1 = $ap_id + 1;

    $query2 =  "insert into appointment values($Fc_id1,$cid,'$vehNo','$vehType','$vehName','$timeSlot','$serviceType','$date','Not Completed')";

   $run1 = mysqli_query($conn,$query2) or die(mysqli_error());

    if($run1){
        $flag = 1;
        echo"<center style='color:white; font-size:25px;'>";
        echo "<h1>Booking Confirmed...!</h1>";
        echo "<h2>Thank You For Choosing Shaurya Motors</h2>";
        echo "Stay Connected we'll Deliver your Vehicle After 2 Hours from your Time Slot";
        echo "<br><br><b>Check Your Details as Below-</b>";
        echo "<br>Appointment ID : ".$Fc_id1;
        echo "<br>Customer ID : ".$_SESSION['cid'];
        echo "<br>Name : ".$name;
        echo "<br>Mobile Number : ".$mob;
        echo "<br>Address : ".$_SESSION['addr'];
        echo "<br>Vehicle No : ".$_SESSION['vehNo'];
        echo "<br>Your Time Slot : ".$_POST['timeSlot'];
        echo "<br><br>(<b>Note :</b> Keep Safe Above All Details for Future References.)";
        
        }
        else{
            echo "Appointment Not Proceed, Try Again with Valid Creadentials !!";
        }
        }
    }

if($flag == 0)
{
    echo"<center style='color:white; font-size:25px;'>";
    echo"<h1>Record Not Found!!!<br>";
    echo "<br>Please Enter Valid Creadentials,<br>";
    echo "Try again With Proper Details...!</center>";
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
<center> <h2>
<a href="home.html" style="color:white;">Back To Home</a>
</center>
</body>
</html>