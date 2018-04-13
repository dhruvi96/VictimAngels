<?php
include('../dbkon.php');
session_start();
if(isset($_SESSION['aid']))
{
   header('location:welcome.php');
}
?>
<html>
	<head>
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		<link href="style.css" rel="stylesheet" type="text/css" >
	</head>
	<body class="dashback" >
		<div class="container ">
			<div class="heading well" style="text-align:center">
			     <h1>Welcome to Admin Panel</h1>
            </div>
		<div class="main col-sm-offset-3 col-sm-6">
			<form class="form-group" method="post" action="index.php" >
				<input type="text" class="form-control form-group" name="uname" placeholder="Enter your username"/>
				<input type="password" class="form-control form-group" name="pass" placeholder="Enter Password"/>
				<input type="submit" class="form-control form-group btn btn-success" name="submit" value="Login"/>
			</form>
		</div>
		</div>
	</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['uname'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM `alogin`";// WHERE  `uname` = '$name' and `pass` = '$pass' ";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    if($row>0)
    {
        ?><script>alert('Login successfully')</script><?php
        $res=mysqli_fetch_assoc($run);
        $_SESSION['aid']=$res['id'];
        header('location:welcome.php');
    }
}
?>






