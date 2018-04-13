<?php include('header.php') ?>
<?php
$sql="SELECT * FROM `ngo`";
$run=mysqli_query($con,$sql);
?>
    <div class="container" style="color:#000;">
        <div class="col-md-6">
            <img class="shimg" style="margin-top: 20px;" src="images/shelter.jpg"><br><br>
            <p style="font-size:20px;z-index:1;text-align: justify;">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        </div>
        <div class="col-md-6">
           <h3>NGOs providing shelter:</h3>
            <ol style="font-size:20px;z-index:1;padding-left: 25px;">
               <?php 
                $count=0;
                while($res=mysqli_fetch_assoc($run))
                {
                ?>
                <a href="<?php echo $res['web']; ?>" target="_blank"><li style="color:#000;text-align: justify;"><h4><b><?php echo $res['name']; ?></b></h4>
                    <p><?php echo $res['disp']; ?></p>
                    </li></a>
                <?php
                }   
                ?>
            </ol>
        </div>
    </div>
<?php include('footer.php') ?>