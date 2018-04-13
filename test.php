<?php
    include('dbkon.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assistant for victim Angel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style1.css">
    <link rel="stylesheet" href="bootstrap/css/media.css">
</head>
<body id="body">
    <a href="test.php">
        <div class="logo">
            <h2 id="logoh2">Our Angels</h2>
            <h3>We Are With You</h3>
        </div>
    </a>
    <div style="float:right; " class="menu">
        <h3 style="margin:55px;" onClick="menu()"><u>Menu</u></h3> 
    </div>    
    <div class="menu-items" id="menui" style="display:none;" >
        <a href="#">
            <li>
                <div class="item1" style="left:10%; top:15%; position:absolute;">
                    <img src="images/blog.jpg"  alt="">
                    <div id="blogdet">
                        <h3 align="center">Blogs</h3>
                        <p>We provide blogs regarding different topics like Sex Education, Child Upbringing , etc</p>
                    </div>
                </div>
            </li>
        </a>
        
        <a href="#">
            <li>
                <div class="item2" style="left:25% ; top:30%; position:absolute;">
                    <img src="images/job.jpg"  alt="">
                </div>
            </li>
        </a>
        <a href="#">
            <li>
                <div class="item3" style="left:40% ; top:45%; position:absolute;">
                    <img src="images/Advo.png" alt="">
                </div>
            </li>
        </a>
        <a href="#">
            <li>
                <div class="item4" style="left:55% ; top:60%; position:absolute;">
                    <img src="images/Donate.jpg" alt="">
                </div>
            </li>
        </a>
        <a href="#">
            <li>
                <div class="item5" style="left:70% ; top:75%; position:absolute;">
                    <img src="images/counselling.jpg" alt="">
                </div>
            </li>
        </a>
    </div>
    <div class="container">
        <div class="nlogin">
            <h2>Are You Needy ?</h2>
            <p>Dont worry we are here with you</p>
        </div>
        <div class="dlogin">
            <h2>Are You A Donor ?</h2>
            <p>We need your help</p>
        </div>
    </div> 
    <a href="">
        <div class="guide">
            <img href="#" src="images/angel.png" />
        </div>
    </a> 
    <script>
        function menu(){
            document.getElementById("menui").style.display="block";
            document.body.style.opacity="";
            document.getElementById("logoh2").style.margintop="10px;";
        }
        $(".item1").hover(function(){
            $('.blogdet').show();
        },function(){
            $('.blogdet').hide();
        });
    </script> 
</body>
</html>