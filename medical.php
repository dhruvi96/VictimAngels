<?php include('header.php') ?>
   <script>
		$(function() {
			$( "#location" ).autocomplete({
				source: 'locfetch.php'
			});
		});
		</script>
    <div class="container">
        <div class="location">
            <form action="medical.php" method="POST" role="form">
                <div class="form-group" style="width:50%">
                    <label for="location">Enter Location</label>
                    <input type="text" class="form-control" id="location" placeholder="Location" name="location">
                </div>
            </form>
        </div>
<?php
if(isset($_POST['location']))
{
    $name=$_POST['location'];
    $sql="SELECT * FROM `hospital` WHERE `type` = 'g' AND `location` = '$name' ";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    ?>
            <div class="well row hosrow" style="text-transform:capitalize">
                <div class="govt col-md-6 col-xm-12">
                    <h3>Government Hospital</h3>
                    <ul>
                      <?php
                        while($res=mysqli_fetch_assoc($run))
                        {
                        ?>
                       <li>
                           <a href="hosdet.php?id=<?php echo $res['id'] ?>"><h3><?php echo $res['name'] ?></h3></a>
                           <p><?php echo $res['location'] ?></p>
                       </li>
                       <?php
                        }
                        ?>
                    </ul>
                </div>
    <?php
    $sql1="SELECT * FROM `hospital` WHERE `type` = 'p'  AND `location` = '$name' ";
    $run1=mysqli_query($con,$sql1);
    $row1=mysqli_num_rows($run1);
    ?>
                <div class="private col-md-6 col-xm-12">
                    <h3>Private Hospital</h3>
                    <ul>
                        <?php
                        while($res1=mysqli_fetch_assoc($run1))
                        {
                        ?>
                       <li>
                           <a href="hosdet.php?id=<?php echo $res1['id'] ?>"><h3><?php echo $res1['name'] ?></h3></a>
                           <p><?php echo $res1['location'] ?></p>
                       </li>
                       <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
<?php
}
else{
        $sql="SELECT * FROM `hospital` WHERE `type` = 'g'";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    ?>
            <div class="well row hosrow" style="text-transform:capitalize">
                <div class="govt col-md-6">
                    <h3>Government Hospital</h3>
                    <ul>
                      <?php
                        while($res=mysqli_fetch_assoc($run))
                        {
                        ?>
                       <li>
                           <a href="hosdet.php?id=<?php echo $res['id'] ?>"><h3><?php echo $res['name'] ?></h3></a>
                           <p><?php echo $res['location'] ?></p>
                       </li>
                       <?php
                        }
                        ?>
                    </ul>
                </div>
    <?php
    $sql1="SELECT * FROM `hospital` WHERE `type` = 'p' ";
    $run1=mysqli_query($con,$sql1);
    $row1=mysqli_num_rows($run1);
    ?>
                <div class="private col-md-6">
                    <h3>Private Hospital</h3>
                    <ul>
                        <?php
                        while($res1=mysqli_fetch_assoc($run1))
                        {
                        ?>
                       <li>
                           <a href="hosdet.php?id=<?php echo $res1['id'] ?>"><h3><?php echo $res1['name'] ?></h3></a>
                           <p><?php echo $res1['location'] ?></p>
                       </li>
                       <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
<?php
}
?>
        <div class="consul">
            <a href="drcon.php"><h2 class="btn btn-success">Consultant Doctors</h2></a>
        </div>
    </div>
<?php include('footer.php') ?>