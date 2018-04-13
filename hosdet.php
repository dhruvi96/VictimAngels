<?php include('header.php') ?>
<div class="hosdet" style="margin:20px;color:#000;">
   <?php
    $id=$_GET['id'];
    $sql="SELECT * FROM `hospital` WHERE `id` = '$id'";
    $run=mysqli_query($con,$sql);
    $data=mysqli_fetch_assoc($run);
    ?>
    <h2 style="text-transform:uppercase"><?php echo $data['name']; ?> </h2>
    <h3 style="text-transform:uppercase"><?php echo $data['location']; ?> </h3>
    <div class="row">
        <div class="col-md-6">
            <img src="images/civil.jpg" style="border:2px solid #000;width:100%;height:auto;">
        </div>
        <div class="col-md-6" style="font-size:20px;">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ahmedabad Civil Hospital is the public hospital in Asia, and is located in Ahmedabad, Gujarat India, with facilities for specialised diagnostic, therapeutic and rehabilitative patient care. Civil hospital, Ahmedabad is the Asia's biggest hospital. Wikipedia<br>
            <b>Address:</b> “D” block, Office of the Medical Superintendent Civil Hospital, Haripura, Asarwa, Ahmedabad, Gujarat 380016<br>
            <b>Phone:</b> 079 2268 3721</p>
            <p><b>WEBSITE:</b><a target="_blank" href="http://civilhospitalamdavad.org/">http://civilhospitalamdavad.org/</a></p>
            <p><b>LOCATION:</b><a target="_blank" href="https://www.google.co.in/maps/dir/''/Civil+Hospital+Campus,+Ahmedabad.,+%E2%80%9CD%E2%80%9D+block,+Office+of+the+Medical+Superintendent+Civil+Hospital,+Haripura,+Asarwa,+Ahmedabad,+Gujarat+380016/@23.0524101,72.534145,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x395e841a8fb6688b:0x74c28945e5a91979!2m2!1d72.6041854!2d23.0524255">Click here for map</a></p>
        </div>
    </div>
</div>
    
<?php include('footer.php') ?>