<?php include('dbkon.php') ?>
<?php
$id=$_REQUEST['id'];
$sql3="SELECT * FROM `story` WHERE `id`='$id'" ;
$run3=mysqli_query($con,$sql3);
$res3=mysqli_fetch_assoc($run3);
?>
<div class="container" style="width:980px;margin:0 auto">
<div class="sback" style="float:left;padding-top:10px; width:50px;">
    <a href="stories.php"><img src="images/leftarrow.png" style="width:50px;" class="img-circle"/></a>
</div>
    <div class="title">
        <h1 align="center"><?php echo $res3['title']; ?></h1>
    </div>
    <div class="disp" style="font-size:20px;text-align:justify">
        <p><?php echo $res3['full_story']; ?></p>
    </div>
</div>