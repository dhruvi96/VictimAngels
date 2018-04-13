<?php
$head="Manage Hospital Details";
include('header.php');
?>
    <div class="lform">
        <form action="mhos.php" method="POST" role="form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input field">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Input field">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Input field">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $type=$_POST['type'];
    $location=$_POST['location'];
    $sql="INSERT into `hospital` (`name`,`type`,`location`) VALUES('$name','$type','$location')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?><script>alert('successful');</script><?php
    }
    else
    {
         ?><script>alert('unsuccessful');</script><?php
    }
}
include('footer.php');
?>