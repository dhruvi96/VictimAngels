<?php
$head="Doctors Management";
include('header.php');
?>

<form action="updr.php" method="post">
    <label>Name</label>
    <input type="text"  name="name" id="name" placeholder="Enter name" />
    <input type="submit" name="submit" value="Search"/>
</form>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $sql="SELECT * FROM `doctor` where `name` LIKE '%$name%' ";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    if($row>0)
    {
        ?>
        <table class="table">
        <tr>
            <th>No.</th>
            <th>Image</th>
            <th>Name</th>
            <th>Address</th>
            <th>Edit</th>
        </tr>
        <?php
        $count=0;
        while($res=mysqli_fetch_assoc($run))
        {
            $count++;
            ?>
            <tr>
               <td><?php echo $count; ?></td>
                <td><img style="width:50px;max-height:80px;" src="../images/doctor/<?php echo $res['img']; ?>"></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['add']; ?></td>
                <td><a href="edr.php?sid=<?php echo $res['id']; ?>">EDIT</a></td>
            </tr>
            <?php
        }   
         ?>
        </table>
        <?php
    }
    else
    {
        echo "No Result Found";
    }
}
?>
<?php include('footer.php') ?>