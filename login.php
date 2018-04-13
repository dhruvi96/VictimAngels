<?php include('header.php'); ?>
<?php include('dbkon.php');
if(isset($_SESSION['uid']))
{
    header('location:profile.php');
}
?>
<style>
@-webkit-keyframes shake {
	0% { -webkit-transform: translate(1px, -1px) rotate(0deg); }
	20% { -webkit-transform: translate(-1px, 1px) rotate(-1deg); }
	40% { -webkit-transform: translate(1px, -1px) rotate(0deg); }
	60% { -webkit-transform: translate(-1px, 1px) rotate(1deg); }
	80% { -webkit-transform: translate(1px, -1px) rotate(0deg); }
	100% { -webkit-transform: translate(-1px, 1px) rotate(-1deg); }
	/*60% { -webkit-transform: translate(1px, -1px) rotate(0deg); }
	70% { -webkit-transform: translate(-1px, 1px) rotate(1deg); }
	80% { -webkit-transform: translate(1px, -1px) rotate(0deg); }
	90% { -webkit-transform: translate(-1px, 1px) rotate(-1deg); }
	100% { -webkit-transform: translate(1px, -1px) rotate(0deg); }*/
}
.animg{
    -webkit-animation-name: shake;
	-webkit-animation-duration: 0.8s;
	-webkit-transform-origin:50% 50%;
    animation-iteration-count: 1;
	-webkit-animation-timing-function: linear;
}
</style>
<img src="images/angel.png" class="animg"/>
<div class="loginp well">
    <div class="nloginp">
        <form action="login.php" id="myform" method="POST" role="form">
            <legend>Login For Victim</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                <p id="text"></p>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter your password">
            </div>
            <button type="submit" name="submit" onclick="ajaxFun" class="btn btn-primary lbtn" id="lsubmit">Login</button>
        </form>
        <h3><a href="nlogin.php" data-toggle="lightbox" class="fancybox fancybox.iframe">Create a new account</a></h3>
    </div>
<?php
if(isset($_POST['submit']))
{
    $_POST=array_map('strip_tags',$_POST);
    $name=mysql_real_escape_string($_POST['name']);
    $pass=mysql_real_escape_string($_POST['pass']);
    $sql="SELECT * FROM `nlogin` WHERE `uname`='$name' AND `pass`='$pass'";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?><script>alert('Login Error! Please check username or password');
                    window.open('login.php','_self');
            </script><?php
    }
    else
    {
        ?><script>alert('Login Successful');</script><?php
        $res=mysqli_fetch_assoc($run);
        $_SESSION['uid']=$res['id'];
        $_SESSION['fname']=$res['fname'];
        $_SESSION['mname']=$res['mname'];
        $_SESSION['lname']=$res['lname'];
        $_SESSION['uname']=$res['uname'];
        $_SESSION['age']=$res['age'];
        $_SESSION['address']=$res['address'];
        $_SESSION['prob']=$res['prob'];
        $_SESSION['img']=$res['img'];
        header('location:profile.php');
        
    }
}
?>
</div>
<?php include('footer.php') ?>
