<?php 
session_start();
include('../dbkon.php');
if(!isset($_SESSION['aid']))
{
	 header('location:index.php');
     exit();
}

?>
<script>
if(var p=0)
    {
        document.getElementById('back').style.display="none";
    }
</script>
<html>
	<head>
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		<link href="style.css" rel="stylesheet" type="text/css" >
	</head>
	<body class="dashback" >
		<div class="container ">
			<div class="heading well" style="margin-top:20px; ">
			     <h1 style="text-align:center"><?php echo $head; ?></h1>
			     <p style="float:right"><a href="logout.php">Logout</a></p>
			     <p style="text-align:left" id="back"><a href="welcome.php">Back to main menu</a></p>
		      </div>