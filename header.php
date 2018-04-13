<?php
session_start();
include('dbkon.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js demo-4">
<head>
    <meta charset="UTF-8">
    <title>Our Angels</title>
    <link rel="icon" type="image/x-icon" href="/path/to/favicon.ico">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="shortcut icon" href="http://simbyone.com/_assets/favicon.ico">
    <link rel="icon" type="image/vnd.microsoft.icon" href="http://simbyone.com/_assets/favicon.ico" />
    <link rel="icon" href="http://simbyone.com/_assets/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://simbyone.com/_assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bookblock/css/default.css" />
    <link rel="stylesheet" type="text/css" href="bookblock/css/bookblock.css" />
	<!-- custom demo style -->
	<link rel="stylesheet" type="text/css" href="bookblock/css/demo4.css" />
	
	<link rel="shortcut icon" href="../victimangels/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/bookblock.css" />    
    
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/hover.css" media="all" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/demo.css" media="all" />
    
    
    <!-- Insert to your webpage before the </head> -->
     
    <link rel="stylesheet" type="text/css" href="carouselengine2/initcarousel-1.css">
    
    
  
    <link href="bootstrap/css/testi.css" rel="stylesheet" type="text/css" />
    <!-- Menu -->
   
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/main.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/media.css"> 
    <style>
        .menu1,.menu2{
            display:noe;
        } 
        #menuid{
             margin-right: 0px;  
        }
        .header h3{
            margin-bottom: 20px;
        }
        .header h1, .header h3{
            color: #63073e;
        }
    </style>
    <style>
        .loader{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/loader.gif) center no-repeat #fff;
        } 
        .gtranslate{
            float: left;
            position: absolute;
            right: 39px;
        }
        .goog-te-gadget-simple {
             height:    
        }
    </style>
</head>

<body class="hbody" >
<div id="google_translate_element" class="gtranslate"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                   
<div class="menu" id="menuid" style="z-index: 2;">
    <button class="btn mbtn" onclick="mtoggle()"><i id="ibar" class="fa fa-close"> </i></button>
</div>  
<div class="row header" id="headerid">
        <div class="logo col-md-4 col-xs-12" style="margin-top:10px" id="logom">
            <a href="index.php"><h1>OUR ANGELS</h1>
            <h3>WE ARE WITH YOU</h3></a>
        </div>
        <div id="headerm">
            <div class="menu1 col-md-4 col-xs-12">
                <ul class="part1">
                    <li class="col-md-4 col-xs-12"><a href="mat.php">Matrimonial</a></li>
                    <li class="col-md-4 col-xs-12"><a href="medical.php">Medical-Aid</a></li>
                    <li class="col-md-4 col-xs-12"><a href="career.php">Career</a></li>
                </ul>
                <ul class="part2">
                    <div class="col-md-2 col-xs-0"></div>
                    <li class="col-md-4 col-xs-12"><a href="stories.php">Stories</a></li>
                    <li class="col-md-4 col-xs-12">
                    <?php
                      if(!isset($_SESSION['uid']))  
                      {
                    ?>
                    <a href="login.php" id="login">Login</a>
                    <?php
                      }
                        else
                    {
                    ?>
                    <a href="profile.php" id="login">Profile</a>
                    <?php
                        }
                    ?>
                    </li>
                </ul>
            </div>
            <div class="menu2 col-md-4 col-xs-12">
                <ul class="part1">
                    <li class="col-md-4 col-xs-12"><a href="testimonial.php">Testimonial</a></li>
                    <li class="col-md-4 col-xs-12"><a href="advo.php">Advocacy</a></li>
                    <li class="col-md-4 col-xs-12"><a href="donate.php">Donation</a></li>
                </ul>
                <ul class="part2">
                    <div class="col-md-2 col-xs-0"></div>
                    <li class="col-md-4 col-xs-12"><a href="blog.php">Blog</a></li>
                    <li class="col-md-4 col-xs-12"><a href="shelter.php">Shelter</a></li>

                </ul>
            </div>
        </div>
    </div>   
    <div class="loader"></div>
    <div class="chat">
        <?php
        if(isset($_SESSION['uid']))  
        {
        ?>
        <a target="_blank" href="https://www.messenger.com/t/250628798790827" class="btn btn-success" style="color:white;position:fixed;bottom:0;right:0;width:200px;z-index:3;">CHAT NOW</a> 
        <?php
        }
        ?>
    </div>
    <script src="bookblock/js/modernizr.custom.js"></script>