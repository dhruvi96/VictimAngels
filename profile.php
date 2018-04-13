<?php include('header.php'); ?>

<?php
if(!isset($_SESSION['uid']))
{
    ?>
    <script>alert('Yoy are not login!!');
        window.open('login.php','_self');
    </script>
    <?php
}
else
{
  ?>
<style>
    .img{
        width:200px;
        height:250px;
    }
</style>
  <div class="container" style="margin-top:20px;">
     <a href="logout.php" style="color:#fff;float:right;" class="btn btn-danger">Logout</a>
      <div class="row">
          <div class="col-md-6 img">
              <img src="images/needy/<?php echo $_SESSION['img'] ?>" style="border:2px solid #000;padding:5px;border-radius:5px">
          </div>

          <div class="col-md-6">
              <h3 style="float:left;"><b>NAME:</b></h3>
              <h3 style="text-transform:uppercase;"><?php echo $_SESSION['fname']." ".$_SESSION['mname']." ".$_SESSION['lname'] ?></h3>
              <h3 style="float:left;margin-top: 10px;"><b>ADDRESS:</b></h3>
              <h3 style="text-transform:uppercase;"><?php echo $_SESSION['address']?></h3>
          </div>

      </div>
  </div>
  <?php
}
?>
<?php include('footer.php'); ?>