<?php include('function.php');
include('header.php'); 
if(isset($_SESSION['uid']))
{
    header('location:profile.php');
}
?>
<style>
    .needform{
        color:#000;
        margin-top: 10px;
    }
    .well{
        height:auto;
    }
</style>
    <div class="container well needform" >
        <div class="back" style="float:left;padding-top: 10px;">
            <a href="login.php"><img src="images/leftarrow.png" class="img-circle"/></a>
        </div>
        <div class="content">
            <h1 class="signup" style="text-align:center;">Sign up For Needy</h1>
            <form action="nlogin.php" style="width:50%;margin-left:25%;" method="POST" role="form"  enctype="multipart/form-data">
                <div class="form-group">
                    <label  for="fname">First name</label>
                    <input type="text" class="form-control" id="fname" required name="fname" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label  for="mname">Middle name</label>
                    <input type="text" class="form-control" id="mname" name="mname"  required placeholder="Middle Name">
                </div>
                <div class="form-group">
                    <label  for="lname">Last name</label>
                    <input type="text" class="form-control" id="lname" name="lname" required placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label  for="uname">User name</label>
                    <input type="text" class="form-control" id="uname" name="uname" required placeholder="user Name">
                </div>
                <div class="form-group">
                    <label  for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" required placeholder="Enter your age">
                </div>
                <div class="form-group">
                    <label  for="add">Address</label>
                    <input type="text" class="form-control" id="add" name="add" required placeholder="Full address">
                </div>
                <div class="form-group">
                    <label  for="prob">Problem Details</label>
                    <input type="text" class="form-control" id="prob" name="prob" required placeholder="Give the details of the issues you went through. Feel free to share.">
                </div>
                <div class="form-group">
                    <label  for="action">Action Taken By You</label>
                    <input type="text" class="form-control" id="action" name="action" required placeholder="What you did after that ?">
                </div>
                <div class="form-group">
                    <label  for="pass">Did You Get Justice?</label><br>
                    <input type="radio" id="yes" name="justice" value="yes">Yes
                    <input type="radio" id="no" name="justice" value="no">No
                </div>
                <div class="form-group">
                    <label  for="ability">Ability to work</label><br>
                    <input type="text" class="form-control" id="ability" name="ability" required placeholder="What type of work you can do?">
                </div>
                <div class="form-group">
                    <label  for="img">Upload Profile Image</label><br>
                    <input type="file" id="img" name="img" />
                </div>
                <div class="form-group">
                    <label  for="pass">Password</label>
                    <input type="password" class="form-control" required id="pass" name="pass" placeholder="Password">
                </div>
                <div class="form-group">
                    <label  for="cpass">Confirm Password</label>
                    <input type="password" class="form-control" required id="cpass" name="cpass" placeholder="Password">
                </div>
                <div class="form-group">
                    <label  for="cpass">Description about your case(This data willbe encrypted and safe)</label>
                    <textarea col='12' class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
<?php include('footer.php'); ?>
<?php

if(isset($_POST['submit']))
{
    $_POST=array_map('strip_tags',$_POST);
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $age=$_POST['age'];
    $add=$_POST['add'];
    $prob=$_POST['prob'];
    $action=$_POST['action'];
    $justice=$_POST['justice'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $img=$_FILES['img']['name'];
    $timg=$_FILES['img']['tmp_name'];
    move_uploaded_file($timg,"images/needy/".$img);
    
    $sql2 = "SELECT * FROM `nlogin` WHERE `uname` = '$uname'";
    $run2=mysqli_query($con,$sql2);

      if (mysqli_num_rows($run2) >=1)
      {
          ?><script>alert("Username already exists");</script><?php
      }
      else
      {
            if($pass==$cpass)
            {
                $sql="INSERT INTO `nlogin`(`fname`,`mname`,`lname`,`uname`,`age`,`address`,`probdet`,`action`,`justice`,`img`,`pass`)VALUES('$fname','$mname','$lname','$uname','$age','$add','$prob','$action','$justice','$img','$pass')";
                $run=mysqli_query($con,$sql);
                if($run)
                {
                    $sql1="SELECT * FROM `nlogin` WHERE `uname` = '$uname'";
                    $run1=mysqli_query($con,$sql1);
                    $res=mysqli_fetch_assoc($run1);
                    $_SESSION['uid']=$res['id'];
                    $_SESSION['fname']=$res['fname'];
                    $_SESSION['mname']=$res['mname'];
                    $_SESSION['lname']=$res['lname'];
                    $_SESSION['img']=$res['img'];
                    header('location:profile.php');
                }
                else
                {
                    echo "Error!!";
                }
            }
            else
            {
                ?><script>alert("password doesn`t match");</script><?php
            }
    }
}
?>