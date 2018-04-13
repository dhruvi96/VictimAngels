<?php
$head="Doctors Management";
include('header.php');
?>
<style>
    .iwell{
        margin-left: 30px;
    }
</style>
<div class="container">
    <div class="row">
       <a href="indr.php">
        <div class="col-md-5 iwell">
            <div class="well">
                <h3 style="text-align:center">ADD NEW +</h3>
            </div>
        </div>
        </a>
        <div class="col-md-1">
        </div>
        <a href="updr.php">
        <div class="col-md-5">
            <div class="well">
                <h3 style="text-align:center">EDIT OLD</h3>
            </div>
        </div>
        </a>
    </div>
</div>
<?php include('footer.php') ?>