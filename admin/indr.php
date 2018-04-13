<?php
$head="Insert Doctors Details";
include('header.php');
?>
<script>var p=1;</script>
    <div class="lform">
        <form action="indr.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="add">Address</label>
                <input type="text" class="form-control" id="add" name="add" placeholder="Eg:Anand">
            </div>
            <div class="form-group">
                <label for="special">speciality</label>
                <input type="text" class="form-control" id="special" name="special" placeholder="Eg:ENT specialist">
            </div>
            <div class="form-group">
                <label for="img">Profile Picture</label>
                <input type="file"  id="img" name="img">
            </div>
            <div class="form-group">
                <label for="num">Mobile number</label>
                <input type="text" class="form-control" id="num" name="num" placeholder="Eg: +91 9888888888">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $add=$_POST['add'];
    $special=$_POST['special'];
    $img=$_FILES['img']['name'];
    $tmpimg=$_FILES['img']['tmp_name'];
    move_uploaded_file($tmpimg,'../images/doctor/'.$img);
    $num=$_POST['num'];
    $sql="INSERT into `doctor` (`name`,`add`,`special`,`num`,`img`) VALUES('$name','$add','$special','$num','$img')";
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