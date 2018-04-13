<?php include('header.php') ?>
<div class="cat">
    <form name="myform" action="" method="post">
        <select class="form-control" onchange="myform.submit()" name="test">
        <option value="0">Choose Catergories..</option>
        <option value="it">IT</option>
        <option value="cc">Call Center</option> 
        <option value="designer">Designer</option> 
        <option value="hw">Household Work</option> 
        <option value="other">Other...</option>                   
        </select>
    </form>
</div>
<div class="list container well">
    <ol>
        <a href="comdet.php">
        <li>
            <h2>Company</h2>
            <h4>Job Title</h4>
            <h4>Salary</h4>
            <h4>Location</h4>
        </li>
        </a>
        <a href="comdet.php">
        <li>
            <h2>Company</h2>
            <h4>Job Title</h4>
            <h4>Salary</h4>
            <h4>Location</h4>
        </li>
        </a>
        <a href="comdet.php">
        <li>
            <h2>Company</h2>
            <h4>Job Title</h4>
            <h4>Salary</h4>
            <h4>Location</h4>
        </li></a>
    </ol>
</div>
<?php include('footer.php') ?>