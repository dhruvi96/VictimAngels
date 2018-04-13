<?php
$head="Matrimonial management";
include('header.php');
?>
    <div class="mslider" style="margin-top:30px">
        <form action="mmatri.php" method="post" enctype="multipart/form-data">
            <legend>Slider Image</legend>
            <div class="form-group">
                <label for="simg">Upload slider image</label>
                <input type="file" id="simg" name="simg"/>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Upload</button>
        </form>
    </div>
<?php
if(isset($_POST['submit']))
{
    $img=$_FILES['simg']['name'];
    $tmpimg=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tmpimg,'../images/mslider/'.$img);
    $sql="INSERT into `mslider` (`simg`) VALUES('$img')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?><script>alert('successfully uploaded');</script><?php
    }
    else
    {
         ?><script>alert('unsuccessful');</script><?php
    }
}
include('footer.php');
?>