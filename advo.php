<?php include('header.php') ?>
    <?php
    $sql="SELECT * FROM `lawyer`";
    $run=mysqli_query($con,$sql);
    
    ?>
    <div class="container  law">
      <br><br>
       <p class="advdesp" style="color:#000;">
           Here we provide legal support to the victims. We have some lawyers who willingly wants to help the victim and they are ready to give them guidance and consultancy.<br> Victim can hire a lawyer from the below list to handle their case. They can contact them for further details.
       </p>
        <h3><i>Lawyers Associated With Us :</i></h3><br>
        <div class="row lawlist">
           <?php
            while($res=mysqli_fetch_assoc($run))
            {
            ?>
            <div class="col-md-4 col-sm-6 ">
               <div class="lawdes">
                <a href="advodet.php"><img src="images/lawyer/<?php echo $res['img']; ?>" alt="" class="img-circle col-xs-4"> 
                    <div class="col-xs-8">
                        <p><?php echo $res['name']; ?></p>
                        <p><?php echo $res['city'].",".$res['state'].",".$res['country']; ?>a</p>
                        <p><?php echo "Rs".$res['fee']; ?> /Consultation</p>
                    </div>
                </a>
                </div>
            </div>
            <?php
            }
            ?>
                
            </div>
        </div>
<?php include('footer.php') ?>