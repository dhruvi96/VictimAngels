<?php include('header.php');
$sql="SELECT * FROM `blog`";
$run=mysqli_query($con,$sql);
?>
<div class="newb">
    <a href="newblog.php"><button class="btn btn-primary">Write Blog</button></a>
</div>
<div class="container">
    <div class="top3 row">
           <?php
            while($res=mysqli_fetch_assoc($run))
            {
            ?>
            <div class="article">
                <a herf="#">
                   <div class="artdet">
                    <img src="images/<?php echo $res['img']; ?>" alt="">
                    <div class="blogdet">
                    <b><h3><?php echo $res['title']; ?></h3></b>
                    <p><?php echo $res['disp']; ?></p>
                    </div>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>
    </div>
    
</div>
<?php include('footer.php') ?>
    