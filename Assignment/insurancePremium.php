<html>
    <head>
        <title>
            payment information
        </title>
        <link rel="stylesheet" href="css/insurancepremium.css">
        	    </head>
        <body>
        
        
        <div class="container">
                <div class="heading">
                    <h3>Welcome to SheildPro Life Insurance</h3>
                </div>
             
                <form method="post" action="readinsupremium.php">
                <div class="form">
                    <div class="pd">
                        <p><u>Payment Details</u></p>
                        <hr>
                    </div>
                     
                        
                    <div class="forminput">
                    <span class="text">Life Insurance Type</span>

                    <select name="insutype" id="insutype" class="textbox">
                    <option value="Gold">Gold</option>
                    <option value="Silver">Silver</option>
                    <option value="Bronze">Bronze</option>
                    <option value="60+">60+</option>
                        </select>
                    <br>
                <span class="text">Name</span>
                    <input type="text" class="textbox" name="ownername" required>
                    <br>
                 <span class="text">Email</span>
                    <input type="email" class="textbox" name="insuranceemail" required>
                    <br>
                    <span class="text">Contact Number</span>
                    <input type="text" maxlength = "10" class="textbox" name="insurancecontact" required>
                    <br>

                    <div class="formbottom">
                        <div class="formbtmfirst">
                        
                        <script>
                            function updatetextboxPholder(){
                                var chosenvalue= document.getElementById("identity").value;
                                var textBox=document.getElementById("idtype");

                                if (chosenvalue=="nic"){
                                    textBox.placeholder="NIC No";
                                }
                                else{
                                    textBox.placeholder="Passport No";
                                }
                            }
                        </script>
                      
                        <span class="text">Identity</span>
                        <select name="identity" id="identity" class="bottombox"  onchange="updatetextboxPholder()">
                            <option value="" disabled selected hidden>Select ID Type</option>
                            <option value="nic">NIC No</option>
                            <option value="passportid">Passport No</option>
                        </select>
                    
                        <input type="text" maxlength = "10" class="bottombox" id="idtype" name="idtype" placeholder="" required>
                        </div>
                        <br>
                        <div class="bottm">

                    
                        <span class="text">Amount</span>
                        <p class="money">LKR</p>
                        <input type="number" min="1" step="any" class="bottombox" id="howmuch" name="howmuch" required>

                        
                    </div>
                    

            </div>
            <input type="submit" name="subbtn" value="Proceed" class="sbt">
        </form>
            </div>


        </div>

    

    </body>
</html>