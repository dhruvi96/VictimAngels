<?php
$head="Manage NGOs Details";
include('header.php');
?>
    <div class="lform">
        <form action="ngo.php" method="POST" role="form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name of NGO">
            </div>
            <div class="form-group">
                <label for="web">Website URL</label>
                <input type="text" class="form-control" id="web" name="web" placeholder="Website of NGO">
            </div>
            <div class="form-group">
                <label for="disp">Discription</label>
                <textarea type="text" class="form-control" id="disp" name="disp"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $web=$_POST['web'];
    $disp=$_POST['disp'];
    $sql="INSERT INTO `ngo` (`name`,`web`,`disp`) VALUES('$name','$web','$disp')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?><script>alert('Inserted successfully');</script> <?php
    }
    else
    {
        ?><script>alert('Error!!');</script> <?php
    }
}
include('footer.php');
?>