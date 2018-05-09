<?php
$head="Change Admin Password";
include('header.php');
?>
    <div class="lform">
        <form action="" method="POST" role="form">
            <div class="form-group">
                <label for="old">Old Password</label>
                <input type="text" class="form-control" id="old" name="old" required placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="new">New Password</label>
                <input type="text" class="form-control" required id="new" name="new" placeholder="Input field">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Change</button>
        </form>
    </div>
<?php
include('footer.php');
if(isset($_POST['submit']))
{
    $old=$_POST['old'];
    $new=$_POST['new'];
    $sql="SELECT * FROM `alogin`";
    $run=mysqli_query($con,$sql);
    $res=mysqli_fetch_assoc($run);
    if($old==$res['pass'])
    {
        $uid=$_SESSION['uid'];
        $sql1="UPDATE `alogin` SET `pass`='$new' WHERE `id`='$uid' ";
        $run1=mysqli_query($con,$sql1);
    }
}
?>