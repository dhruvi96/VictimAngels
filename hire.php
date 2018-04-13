<?php include('header.php'); ?>
<?php
$sql="SELECT * FROM nlogin WHERE ability!=' ' ";
$run=mysqli_query($con,$sql);
?>
<div class="container">
<table class="table table-striped table-bordered" style="margin-top:5%;font-size:20px;">
    <thead>
        <tr>
            <th><b>Name</b></th>
            <th><b>Ability</b></th>
            <th><b>Hire</b></th>
        </tr>
    </thead>
    <tbody>
       <?php
        while($res=mysqli_fetch_assoc($run))
        {
        ?>
        <tr>
            <td style="text-transform:uppercase"><?php echo $res['uname']; ?></td>
            <td><?php echo $res['ability']; ?></td>
            <td style="cursor:pointer"><a>Hire</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<?php include('footer.php'); ?>
