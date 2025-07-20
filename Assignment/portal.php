<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href='css/portal.css'>
</head>
<body>
  <div class="main_box">
    <form action="" method="post">
        <div class="heading">
            <h3 class="title">One-Time Payment</h3>
            <h4 class="title2">Amount to be paid</h4>
            <h5 class="title3">LKR XXXXXX</h5>
           
        </div>
        <hr>
        <div class="start">
                <div class="fisrt2">
                    <span>Select your card :</span>
                    <select name="card" id="card" class="text">Select Your card
                    <option value="VISA">VISA</option>
                    <option value="Master Card">Master Card</option>
                    <option value="Paypal">Paypal</option>
                    </select>
                </div>
                <div class="img">
                    <div class="imges">
                        <span>Cards Accepted :</span>
                    </div>
                    <div class="pics">
                        <img src='images/cards.png'>
                    </div>
                </div>
        </div>

        <div class="nme_val">
            <span>Cardholder's Name :</span>
            <input type="text" class="text" placeholder="Mr.Dasith Karunarathne">
        </div>

        <div class="nme_val">
            <span >Card Number :</span>
            <input type="text" class="text" placeholder="XXXX XXXX XXXX XXXX">
        </div>

        <div class="val_cvv_all">
            <div class="val_cvv">
                <span >Valid Until :</span>
                <input type="text" class="text" placeholder="Month/Year">
            </div>
            <div class="l_cvv">
              <div class="again">
                <span >CVV :</span>
              </div>
              <div class="again2">
                <input type="text" class="text" placeholder="123">
              </div>
            </div>
        </div>
        
        <div class="buttons">
        <button type="reset" class="btn">Cancel</button>
        <button type="submit" class="btn">Pay</button>

      </div>
        






    </form>

</div>

  
</body>
</html>




