<?php
$head="Update Lawyer`s Details";
include('header.php');
?>
<script>var p=1;</script>
<?php
$sid=$_GET['sid'];
$sql1="SELECT * FROM `doctor` WHERE `id` = '$sid' ";
$run1=mysqli_query($con,$sql1);
$data=mysqli_fetch_assoc($run1);
?>
    <div class="lform">
        <form action="edr.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="<?php echo $data['name'] ?>" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="add">Address</label>
                <input type="text" value="<?php echo $data['add'] ?>" class="form-control" id="add" name="add" placeholder="Eg:Anand">
            </div>
            <div class="form-group">
                <label for="special">Speciality</label>
                <input type="text" value="<?php echo $data['special'] ?>" class="form-control" id="special" name="special" placeholder="Eg:500">
            </div>
            <div class="form-group">
                <label for="img">Profile Picture</label>
                <input type="file" value="<?php echo $data['img'] ?>" id="img" name="img">
            </div>
            <div class="form-group">
                <label for="num">Mobile number</label>
                <input type="text" value="<?php echo $data['num'] ?>" class="form-control" id="num" name="num" placeholder="Eg:500">
            </div>
            <input type="hidden" name="sid" value="<?php echo $data['id'] ?>" >
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $add=$_POST['add'];
    $special=$_POST['special'];
    $id=$_POST['sid'];
    $sid=$_GET['sid'];
    $img=$_FILES['img']['name'];
    $tmpimg=$_FILES['img']['tmp_name'];
    move_uploaded_file($tmpimg,'../images/doctor/'.$img);
     $num=$_POST['num'];
    $sql="UPDATE `doctor` SET `name`='$name',`add`='$add' , `special`='$special', `img` ='$img' , `num` = '$num'
    WHERE `id` = '$id' ";
    $run=mysqli_query($con,$sql);
    if($run)    
    {
        ?><script>alert("Updated Successfully ");
        window.open('updr.php','_self');
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