<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contactcorrect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<section class="headingtop">
    <?php include 'header.php';  ?>
            <div class="headim">
            
                <p>Life Insurance - Contact Us</p>
                <h3>We Are At Your Fingertips</h3>
                   
            </div>


        </section>


        <div class="container">
            <div class="left-content">
                <div class="heading">
                    <h2>Get in touch</h2>
                    <hr>
                   
                    <div class="box">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>0112345678</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                            <div class="text">
                                <h3>Email</h3>
                                <p>info@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                            <div class="text">
                                <h3>Address</h3>
                                <p>Head Office: <br>
                                    ShieldPro Insurance PLC, 
                                   <br>
                                    No. 30, Sri Uttarananda Mawatha,<br>
                                    Colombo 03, Sri Lanka.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>

                <form method="post" action="insertcontact.php" class="formbox">              
                    <span>Name</span>
                    <input type="text" name="name"  class="contact-input" required>
                                      
                    <span>Email</span>
                    <input type="email" name="email"  class="contact-input" required>               
                
                    <span>Address</span>
                    <input type="text" name="address"  class="contact-input" required>
                          
                    <span>Telephone Number</span>
                    <input type="text" name="telno" class="contact-input" required>

                    <div class="txt">
                    <span>Message</span>
                    <textarea name="message"  class="contact-input" required></textarea>
                </div>
                    <button type="Submit" class="btn">Submit</button>
                

            </form>

        </div>
        <?php include 'footer.php';  ?>

        


    
</body>
</html>














