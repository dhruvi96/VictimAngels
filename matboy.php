<?php include('header.php') ?>
<?php
$sql="SELECT * FROM `matrimonial` WHERE `gender`='female' ";
$run=mysqli_query($con,$sql);
?>
<div class="row female" style="display:non">
        <div class="col-md-7" style="margin-top:10px">
           <div class="well" style="height:440px;overflow:scroll;">
           <h2>Find your MATCH here...</h2>
            <div class="row" style="margin:20px">
               <?php
                while($res=mysqli_fetch_assoc($run))
                {
                ?>
                <div class="col-md-4" align="center" style="margin-top:20px;">
                    <div class="bg1 bg">
                        <img src="images/mat/<?php echo $res['img']; ?>" class="img-rounded img-responsive"/>
                        <div class="hodet1">
                            <h3><?php echo $res['name']; ?></h3>
                            <h4><?php echo $res['city']; ?></h4>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            
            </div>
        </div>
        </div>
        <div class="col-md-5" style="padding-left: 0; ">
           <a href="logoutm.php" style="color:#fff;margin: 20px 20px 0px 470px;" class="btn btn-danger">Logout</a>
            <?php
            $sql="SELECT * FROM `mslider`";
            $run=mysqli_query($con,$sql);
            
            ?>
            		<div class="slideshow-container">
                      <?php
                       while($row=mysqli_fetch_assoc($run))
                          {
                        ?>
                        <div class="mySlides fade">
                            <img src="images/mslider/<?php echo $row['simg']; ?>" style="width:100% ; height:385px" >
                        </div>
                        <?php } ?>
                    </div>
            <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                   slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex> slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 3000); // Change image every 2 seconds
            }
            </script>
        </div>
    </div>  
<?php include('footer.php') ?>