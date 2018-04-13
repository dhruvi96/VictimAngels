<?php
$head="Insert Lawyers Details";
include('header.php');
?>
<script>var p=1;</script>
    <div class="lform">
        <form action="inlaw.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Eg:Anand">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="Eg:Gujarat">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Eg:India">
            </div>
            <div class="form-group">
                <label for="fee">Fees/Consultancy</label>
                <input type="text" class="form-control" id="fee" name="fee" placeholder="Eg:500">
            </div>
            <div class="form-group">
                <label for="img">Profile Picture</label>
                <input type="file"  id="img" name="img">
            </div>
            <div class="form-group">
                <label for="desp">Description</label>
                <textarea type="text" id="desp" class="form-control" name="desp" placeholder="Description in detail"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $fee=$_POST['fee'];
    $img=$_FILES['img']['name'];
    $tmpimg=$_FILES['img']['tmp_name'];
    move_uploaded_file($tmpimg,'../images/lawyer/'.$img);
    $desp=$_POST['desp'];
    $sql="INSERT into `lawyer` (`name`,`city`,`state`,`country`,`fee`,`img`,`desp`) VALUES('$name','$city','$state','$country','$fee','$img','$desp')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?><script>alert("Entered Successfully");</script><?php
    }
    else
    {
        ?><script>alert("Error!!!");</script><?php
    }
}
include('footer.php');
?>