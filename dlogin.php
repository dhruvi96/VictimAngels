<?php include('function.php'); ?>
<?php include('header.php'); ?>
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
        <div class="content">
            <h1 style="text-align:center;">Sign up For Donor</h1>
            <form action="dlogin.php" style="width:50%;margin-left:25%;" method="POST" role="form">
                <div class="form-group">
                    <label  for="fname">First name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label  for="mname">Middle name</label>
                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">
                </div>
                <div class="form-group">
                    <label  for="lname">Last name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label  for="uname">User name</label>
                    <input type="text" class="form-control" id="uname" name="uname" placeholder="user Name">
                </div>
                <div class="form-group">
                    <label  for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter your age">
                </div>
                <div class="form-group">
                    <label  for="add">Address</label>
                    <input type="text" class="form-control" id="add" name="add" placeholder="Full address">
                </div>
                <div class="form-group">
                    <label  for="buss">Bussiness</label>
                    <input type="text" class="form-control" id="buss" name="buss" placeholder="Give the details of your bussiness">
                </div>        
                <div class="form-group">
                    <label  for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                </div>
                <div class="form-group">
                    <label  for="cpass">Confirm Password</label>
                    <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>

<?php
    include('dbkon.php');
    if(isset($_POST['submit']))
    {
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $uname=$_POST['uname'];
        $age=$_POST['age'];
        $address=$_POST['add'];
        $buss=$_POST['buss'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        
        $sql="INSERT INTO `dlogin`(`id`, `fname`, `mname`, `lname`,`uname`, `age`,`address`,`bussiness`,`pass`,`cpass`) VALUES (NULL,'$fname','$mname','$lname','$uname','$age','$address','$buss','$pass','$cpass')";
			
        $run=mysqli_query($con,$sql);
        if($run)
			{
				?>
            <script>alert('You have registered successfully ! Thank You.');
                    window.open('profile.php?uname=<?php echo $uname; ?>','_self');
            </script>
            <?php
        }
        else
        {
            echo"There may be some error";
        }
    }
    
?>
   
<?php include('footer.php'); ?>