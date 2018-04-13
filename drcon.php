<?php include('header.php') ?>
<div class="drcon" style="color:#000;margin:20px">
    <h2 class="drhead" style="margin-bottom:20px;">Doctors associated with us:</h2>
    <div class="well">
<?php
    $sql="SELECT * FROM `doctor`";
    $run=mysqli_query($con,$sql);
?>
            <div class="row drlist container" >
            <?php
            while($res=mysqli_fetch_assoc($run))
            {
            ?>
                <div class="col-md-6">
                   <div class="drdes">
                    <img src="images/doctor/<?php echo $res['img']; ?>" alt="" class="col-md-4"> 
                        <div class="col-md-8">
                            <p class="name"><b><?php echo $res['name']; ?></b></p>
                            <p><?php echo $res['add']; ?></p>
                            <p><?php echo $res['special']; ?></p>
                            <p><b>Phone no.</b><?php echo $res['num']; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
                
    </div>
</div>
<?php include('footer.php') ?>