<?php
$head="Success Stories Management";
include('header.php');
?>
 <div class="lform">
        <form action="msto.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" id="img" name="img">
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
    $title=$_POST['title'];
    $img=$_FILES['img']['name'];
    $tmpimg=$_FILES['img']['tmp_name'];
    move_uploaded_file($tmpimg,"../images/story/".$img);
    $disp=$_POST['disp'];
    $sql="INSERT INTO `story` (`title`,`img`,`disp`) VALUES('$title','$img','$disp')";
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