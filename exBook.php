<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(1)Book Your Appoinment with Shaurya Motors</title>
    <link rel="stylesheet" href="exBook.css">
</head>

<body style="background-color: rgb(245, 245, 181);">
    <form action="exBook1.php" method="post">
        <div class="wrapper">
            <div class="title">
              Book Appoinment
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Cutomer ID :</label>
                    <input type="text" name="cid" id="cid" placeholder="Must Fillout*" required="required">
                 </div> 
               <div class="inputfield">
                  <label>Name</label>
                  <input type="text" name="name" id="name" required="required">
               </div>   
                
             <div class="inputfield">
                <label>Mobile/Phone</label>
                <input type="tel" name="mob" id="mob" required="required">
             </div>
             
             <div class="inputfield">
                  <label>Address</label>
                  <input type="text" name="addr" id="addr" required="required">
               </div>
             
                <div class="inputfield">
                  <label>Enter Vehicle No.</label>
                  <input type="text" name="vehNo" id="vehNo" placeholder="   eg. MH-16-CC-1925" required="required">
               </div> 
               <div class="inputfield">
                <label>Select Vehicle Type :</label>
                <select name="vehType" required="required">
                    <option value="null">Select Option</option>
                    <option value="Car">Car</option>
                    <option value="Bike">Bike</option>
                </select>
             </div> 
               
               
                <div class="inputfield">
                <input type="submit" value="Next" class="btn">
              </div>
            </div>
        </div>	
    </form>
</body>

</html>