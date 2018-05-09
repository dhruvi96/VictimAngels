<?php include('header.php') ?>
<?php
if(!isset($_SESSION['uid']))
{
    ?>
    <script>alert('Yoy are not login!!');
        window.open('login.php','_self');
    </script>
    <?php
}
else
{
  ?>
<div class="job">
  <div class="jbox">
   <ul class="ca-menu">
                    <li>
                        <a href="job.php">
                            <span class="ca-icon">J</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Jobs</h2>
                                <h3 class="ca-sub">Personalized to your needs</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="sup.php">
                            <span class="ca-icon">S</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Startup</h2>
                                <h3 class="ca-sub">Create Your Own Business</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="hire.php">
                            <span class="ca-icon">H</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Hire</h2>
                                <h3 class="ca-sub">You can hire people from here</h3>
                            </div>
                        </a>                    
                    </li>
    </ul>

</div>
<?php
}
?>
<?php include('footer.php') ?>