<?php
$head="Lawyers Management";
include('header.php');
?>

<form action="uplaw.php" method="post">
    <label>Name</label>
    <input type="text"  name="name" id="name" placeholder="Enter name" />
    <label>City</label>
    <input type="text" name="city" id="city"  placeholder="Enter city" />
    <input type="submit" name="submit" value="Search"/>
</form>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $city=$_POST['city'];
    $sql="SELECT * FROM `lawyer` where `name` LIKE '%$name%' AND `city` LIKE '%$city%' ";
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
            <th>City</th>
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
                <td><img style="width:50px;max-height:80px;" src="../images/lawyer/<?php echo $res['img']; ?>"></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['city']; ?></td>
                <td><a href="elaw.php?sid=<?php echo $res['id']; ?>">EDIT</a></td>
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