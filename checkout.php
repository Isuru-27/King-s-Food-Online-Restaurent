<?php
 
require('connection.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="checkout.css">
        <title></title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Muli:200,200i,400,400i,700,800,800i');

        </style>
    </head>
    <body>
        <div class="container">
  
            <div class="card-body">
                <div class="active">Payment Method</div>

              <div class="payment">
                
                <div class="creditcard">
                  <div class="thecard">
                    <div class="top-card">
                      <div class="circle"></div>
                      <div class="card-title">
                        The Card
                      </div>
                    </div>
                    <div class="card-info">
                      <div class="card-number">
                      0000 0000 0000 0000
                      </div>
                      <div class="exp-date">
                        01 / 2018
                      </div>
                      <div class="card-holder">
                        John whick
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="form">
                  <form action="code4.php" method="POST">
                    <label for="option">Payment Method</label>
                    <select name="method" id="method">
                        <option value="visa">Visa Card</option>
                        <option value="master">Master Card</option>
                        <option value="discover">Discover</option>
                        <option value="genie">Genie</option>
                      </select>

                    <label for="cardnumber">Card Number</label>
                    <input type="text" id="cardnumber" name="cardnum" placeholder="0000 0000 0000 0000">

                    <label for="cardholder">Card Holder</label>
                    <input type="text" id="cardholder" name="carduser" placeholder="John whick">

                    <label for="exp">Expiration Date</label>
                    <div class="date">
                        <select name="month" id="month">
                          <option value="january">January</option>
                          <option value="february">February</option>
                          <option value="march">March</option>
                          <option value="april">April</option>
                          <option value="may">May</option>
                          <option value="june">June</option>
                          <option value="july">July</option>
                          <option value="august">August</option>
                          <option value="september">September</option>
                          <option value="october">October</option>
                          <option value="november">November</option>
                          <option value="december">December</option>
                        </select>
                        <select name="Year">
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2027</option>
                          <option value="2028">2028</option>
                        </select>
                      </div>
                    <div class="small">
                      <div class="cvc">
                        <label for="cvc">CVC</label>
                        <input type="text" id="cvc" maxlength="3" size="4" name="cvc" placeholder="123">
                      </div>
                      <p>Three or four digits, usually found on the back of the card</p>
                    </div>
                    <button name="pure1">purchase</button>
                  </form>
                </div>
                
              </div>
              
            </div>
            
          </div>
    </body>
</html>


