<?php
$head="Welcom to Admin Dashboard";
include('header.php');
?>
<script>var p=0;</script>
            <div class="modify">
                <table class="table" style="background-color:#fff ; text-align:center;">
                    <tr><td><a href="mlaw.php"><h4>Lawyers Management</h4></a></td></tr>
                    <tr><td><a href="mdr.php"><h4>Doctors Management</h4></a></td></tr>
                    <tr><td><a href="mdon.php"><h4>Donor Details</h4></a></td></tr>
                    <tr><td><a href="mhos.php"><h4>Hospital Details</h4></a></td></tr>
                    <tr><td><a href="mmatri.php"><h4>Matrimonial Management</h4></a></td></tr>
                    <tr><td><a href="ngo.php"><h4>Shelter Providing NGOs</h4></a></td></tr>
                    <tr><td><a href="upblog.php"><h4>Blogs Updates</h4></a></td></tr>
                    <tr><td><a href="mtest.php"><h4>Testimonial Management</h4></a></td></tr>
                    <tr><td><a href="msto.php"><h4>Success Stories</h4></a></td></tr>
                    <tr><td><a href="adpass.php"><h4>Change Admin Password</h4></a></td></tr>
                    <tr><td><form class="form-group col-sm-offset-3 col-sm-6">
                    <a href="logout.php" class="form-control form-group btn btn-danger">Logout</a>
                        </form></td></tr>
                </table>
            </div>
<?php
include('footer.php');
?>