<?php
$names=array('one','two','three');
if(isset($_POST['suggest']))
{
    $uname=$_POST['suggest'];
    foreach($names as $name)
    {
        if(strpos($name,$uname)!==false)
        {
            echo $name;
            echo "<br>";
        }
    }
}
?>
