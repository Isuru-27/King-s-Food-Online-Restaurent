<?php
 
require('connection.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Page</title>
    <link rel="stylesheet" href="reserve.css">
</head>
<body>
<!--ring div starts here-->
<div class="ring">
    <i style="--clr:#00ff0a;"></i>
    <i style="--clr:#ff0057;"></i>
    <i style="--clr:#fffd44;"></i>
    <div class="login">
      <h2>Reservation</h2>
      <form method="POST" action="code3.php">
      <div class="inputBx">
        <input type="text" name="resname" placeholder="Receiver Name" required><br><br>

        <input type="address" name="address" placeholder="Receiver Address" required><br><br>

        <input type="text" name="email" placeholder="Email Address" required><br><br>

        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number"required><br><br>
        <center>
            <form action="###">
                <button name="pure">Submit</button>
            </form>
        </center>

      </div>
      </form>
    </div>
</div>
  <!--ring div ends here-->
</body>
</html>