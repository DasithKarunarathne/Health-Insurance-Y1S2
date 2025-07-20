<html>
    <head>
        <link rel="stylesheet" href="./payonline.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </head>
    <body>
        <section class="header">
        <?php include 'header.php';  ?>

            <div class="pic-box">
                <p>Pay Premium - Life Insurance</p>
                <h1>Hassle Free Premium Payment</h1>
            </div>
        </section>
        
      


        <section class="mid">
<div class="mid-part">
    <h3>The safer, faster, easier way to pay your premiums online</h3>
    <p>Welcome to the online payment gateway for SheildPro! Insurance payments are now more convenient and straightforward. Simply complete the necessary fields and submit your insurance payment. It can be finished in a matter of minutes, anywhere, at any time. The ability to pay premiums online is limited to the current policy or policies. Refunds will only be granted at the company's discretion following a convincing argument. I agree, </p>
        
        <input type="submit" value="NEXT" class="btn" onclick="insupremiumpg()">
        <script>
            function insupremiumpg(){
                document.location.href='insurancePremium.php';

            }
        </script>

</div>
          
        </section>



    </body>
    <?php include 'footer.php';  ?>
</html>