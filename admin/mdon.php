<?php
$head="Manage Donors Details";
include('header.php');
?>
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
        <a href="payment.php"><input type="submit" name="submit" value="Donate Now" class="btn btn-success"/></a>
    </form>
<?php
include('footer.php');
?>