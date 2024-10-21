<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System | Shaurya Motors Pvt.Ltd.</title>
    <link rel="stylesheet" href="bill.css">
</head>

<body>
    <form action="bill.php" method="post">
        <div class="wrapper">
            <div class="title">
                <h2> - Bill Desk - </h2>
            </div>

            <div class="form">
                <div class="inputfield">
                    <label>Enter Appoinment ID :</label>
                    <input type="text" name="apid" id="apid" placeholder=" Enter Valid Creadentials"><br><br>
                </div>

                <div class="inputfield">
                    <label>Enter Vehicle No. -</label>
                    <input type="text" id="vehNo" name="vehNo" placeholder="  eg. MH-42-BE-8675"><br> <br>

                </div>

                <div class="inputfield">
                    <input type="submit" value="Get Details" class="btn">
                </div>

            </div>
        </div>
    </form>
    
</body>

</html>