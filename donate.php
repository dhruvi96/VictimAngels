<?php include('header.php')?>

<div class="dform container well" style="height:auto">
    <div class="doclose">
        <button class="doclose btn btn-default"><i class="fa fa-close"></i></button>
    </div>
    <h3 style="text-align:center;color:#fff;">Make this gift on behalf of :</h3>
    <form action="payment.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" />
        </div>
        <div class="form-group">
            <label for="prof">Proffession</label>
            <input type="text" name="prof" id="prof" class="form-control" placeholder="Enter Your Proffession" />
        </div>
        <div class="form-group">
            <label for="insti">Institute Name</label>
            <input type="text" name="insti" id="insti" class="form-control" placeholder="Enter Your Institute Name" />
        </div>
        <div class="form-group">
            <label for="amt">Amount of Donation</label><br>
            <span class="rs">Rs.</span> <input type="text" style="width:40%;display:inline" name="amt" id="amt" class="form-control" placeholder="Amount" />
        </div>
       <!-- <a href="payment.php"><input type="submit" name="submit" value="Donate Now" class="btn btn-success"/></a>-->
        <div class='pm-button'><a target="_blank" href='https://www.payumoney.com/paybypayumoney/#/9F317E486BE5833DE3DC572348CE88D3'><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/22.png' /></a></div> 
    </form>
</div>
<div class="donor" >
    <h2>How You Can Help</h2>
    <p>We want to do more and you can help. By committing a small fraction of your income to protect children in need, you can help save a child and contribute to humanity. You can donate as low as INR 500 per month.</p>

    <p>While Save the Children appreciates <span>monthly donations</span> where you choose to donate a small fixed amount monthly for us to be able to plan our programmes for a longer term, a <span>single donation</span> can also help save a child</p>

    <p>You will get your tax exemption certificate within 15 days of your one-time donation (quarterly in case of regular donors, who pledge monthly donations, after their first month’s donation). You will get quarterly updates on how you are making a difference.</p>
    <button class="btn btn-danger idonate" onclick="donate()">I WANT TO DONATE</button>
</div>

<?php include('footer.php')?>