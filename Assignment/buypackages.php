<html>
    <head>
        <title>
            payment information
        </title>
        <link rel="stylesheet" href='css/buypackages.css'>
       
        	    </head>
        <body>
               
        
        
        <div class="container">
                <div class="heading">
                    <h3>Welcome to SheildPro Life Insurance</h3>
                </div>
             
                <form method="post" action="BpackINSERT.php">

                


                <div class="form">
                    <div class="pd">
                        <p><u>Payment Details</u></p>
                        <hr>
                    </div>

                    
                     
                        
                    <div class="forminput">
                    <span class="text">Life Insurance Type</span>

                    <select name="insutype" id="insutype" class="textbox" onchange="updateAmount()">
                    <option value="" disabled selected hidden>Select package Type</option>
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
                        <select  class="bottombox" name="identity" id="identity" onchange="updatetextboxPholder()">
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
                        <input type="number" min="1" step="any" class="bottombox" id="howmuch" name="howmuch" readonly>

                        
                    </div>

                    <script>

                        function updateAmount() {
                            var dropdown = document.getElementById("insutype");
                            var textbox = document.getElementById("howmuch");
                            var amount="";

                            switch(dropdown.value){
                                case"Gold":
                                    amount="200000";
                                    break;
                                case"Silver":
                                    amount="150000";
                                    break;
                                case"Bronze":
                                    amount="100000";
                                    break;
                                case"60+":
                                    amount="85000";
                                    break;
                                    default:
                                        amount="";
                            }
                            textbox.value=amount;


                            
                        }
                        
                    </script>
                    

            </div>
            <input type="submit" name="subbtn" value="Proceed" class="sbt">
        </form>
            </div>


        </div>

    

    </body>
</html>