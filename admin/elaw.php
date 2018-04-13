<?php
$head="Update Lawyer`s Details";
include('header.php');
?>
<script>var p=1;</script>
<?php
$sid=$_GET['sid'];
$sql1="SELECT * FROM `lawyer` WHERE `id` = '$sid' ";
$run1=mysqli_query($con,$sql1);
$data=mysqli_fetch_assoc($run1);
?>
    <div class="lform">
        <form action="elaw.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="<?php echo $data['name'] ?>" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" value="<?php echo $data['city'] ?>" class="form-control" id="city" name="city" placeholder="Eg:Anand">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" value="<?php echo $data['state'] ?>" class="form-control" id="state" name="state" placeholder="Eg:Gujarat">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" value="<?php echo $data['country'] ?>" class="form-control" id="country" name="country" placeholder="Eg:India">
            </div>
            <div class="form-group">
                <label for="fee">Fees/Consultancy</label>
                <input type="text" value="<?php echo $data['fee'] ?>" class="form-control" id="fee" name="fee" placeholder="Eg:500">
            </div>
            <div class="form-group">
                <label for="img">Profile Picture</label>
                <input type="file" value="<?php echo $data['img'] ?>" id="img" name="img">
            </div>
            <div class="form-group">
                <label for="desp">Description</label>
                <textarea type="text" id="desp" class="form-control" name="desp" placeholder="Description in detail"> <?php echo $data['desp'] ?></textarea>
            </div>
            <input type="hidden" name="sid" value="<?php echo $data['id'] ?>" >
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
    $id=$_POST['sid'];
    $sid=$_GET['sid'];
    $img=$_FILES['img']['name'];
    $tmpimg=$_FILES['img']['tmp_name'];
    move_uploaded_file($tmpimg,'../images/lawyer/'.$img);
    $desp=$_POST['desp'];
    $sql="UPDATE `lawyer` SET `name`='$name', `city` = '$city' , `state` = '$state', `country`='$country' , `fee`='$fee', `img` ='$img' , `desp` = '$desp'
    WHERE `id` = '$id' ";
    $run=mysqli_query($con,$sql);
    if($run)    
    {
        ?><script>alert("Updated Successfully ");
        window.open('uplaw.php','_self');
        </script><?php
        
    }
    else
    {
        ?><script>alert("Error!!!");</script><?php
    }
}
?>
<?php
include('footer.php');
?>