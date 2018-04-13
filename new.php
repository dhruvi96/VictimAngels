<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://simbyone.com/_assets/favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="http://simbyone.com/_assets/favicon.ico" />
<link rel="icon" href="http://simbyone.com/_assets/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://simbyone.com/_assets/favicon.ico" type="image/x-icon" />
<title>Mobile Header Animations Example 2</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/main.css" rel="stylesheet" type="text/css"/>

<style>
.mobile-inner-nav a{
	-webkit-animation-duration: 0.5s;
	animation-duration: 0.5s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
	-webkit-animation-name: returnToNormal;
	animation-name: returnToNormal;
}
	
		
@-webkit-keyframes returnToNormal {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes returnToNormal {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
</style>
<script type="text/javascript" src="bootstrap/js/jquery-2.2.0.min.js"></script>
<script>
$(window).load(function () {
$(".mobile-inner-header-icon").click(function(){
	$(this).toggleClass("mobile-inner-header-icon-click mobile-inner-header-icon-out");
	$(".mobile-inner-nav").slideToggle(250);
});
  $(".mobile-inner-nav a").each(function( index ) {
  	$( this ).css({'animation-delay': (index/10)+'s'});
  });
});
</script>


</head>
<body>
<div class="mobile">
<div class="mobile-inner">
<div class="mobile-inner-header"><div class="mobile-inner-header-icon mobile-inner-header-icon-out"><span></span><span></span></div></div>
<div class="mobile-inner-nav">
<a href="#">Home</a>
<a href="#">Services</a>
<a href="#">Portfolio</a>
<a href="#">Blog</a>
<a href="#">About</a>
<a href="#">Contact</a>
</div>

</div>
</div>






</body>
</html>

