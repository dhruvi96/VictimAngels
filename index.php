<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assistant for victim Angel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/media.css">
    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body onload='responsiveVoice.speak("Hey Angel, Your assistant is ready");' >
       
    <div class="ocenpen">
        <div class="cenpen" onmouseover="tapover"></div>
    </div>
    <div class="tap">
        <h3>TAP HERE</h3>
    </div>
    <div class="quote">
        <h1 style="text-align:center;">“Better to be strong than <br>pretty and useless.”</h1>
    </div>
<!--    <div class="quotes">
        <ul class="qul">
            <li><h3>“If you can make a woman laugh, you can make her do anything.”</h3></li>
            <li><h3>“A girl should be two things: classy and fabulous.”</h3></li>
            <li><h3>“Better to be strong than pretty and useless.”</h3></li>
            <li><h3>“Not knowing you can't do something, is sometimes all it takes to do it.”</h3></li>
            <li><h3>“Cut the ending. Revise the script. The man of her dreams is a girl.”</h3></li>
        </ul>
    </div>-->
    <div class="mod" id="mods">
        <a href="login.php"><div class="mod1"></div><div class="lie1"></div>
            <h4 class="head1">
            <span class="char11">L</span>
            <span class="char12">o</span>
            <span class="char13">g</span>
            <span class="char14">i</span>
            <span class="char15">n</span>
        </h4></a>
        <a href="donate.php"><div class="mod2"></div><div class="lie2"></div>
        <h4 class="head2">
            <span class="char21">D</span>
            <span class="char22">o</span>
            <span class="char23">n</span>
            <span class="char24">a</span>
            <span class="char25">t</span>
            <span class="char26">e</span>
            <span class="char27"> </span>
            <span class="char28">n</span>
            <span class="char29">o</span>
            <span class="char210">w</span>
            
        </h4></a>
        <a href="job.php"><div class="mod3"></div><div class="lie3"></div>
            <h4 class="head3">
            <span class="char31">J</span>
            <span class="char32">o</span>
            <span class="char33">b</span>
            <span class="char34">s</span>
        </h4>
        </a>
        <a href="mat.php"><div class="mod4"></div><div class="lie4"></div>
            <h4 class="head4">
            <span class="char41">M</span>
            <span class="char42">a</span>
            <span class="char43">t</span>
            <span class="char44">r</span>
            <span class="char45">i</span>
            <span class="char46">m</span>
            <span class="char47">o</span>
            <span class="char48">n</span>
            <span class="char49">i</span>
            <span class="char410">a</span>
            <span class="char411">l</span>
            </h4>
        </a>
        <a href="stories.php"><div class="mod5"></div><div class="lie5"></div>
            <h4 class="head5">
            <span class="char51">S</span>
            <span class="char52">t</span>
            <span class="char53">o</span>
            <span class="char54">r</span>
            <span class="char55">i</span>
            <span class="char56">e</span>
            <span class="char57">s</span>
            </h4>
        </a>
        <a href="advo.php"><div class="mod6"></div><div class="lie6"></div>
            <h4 class="head6">
            <span class="char61">A</span>
            <span class="char62">d</span>
            <span class="char63">v</span>
            <span class="char64">o</span>
            <span class="char65">c</span>
            <span class="char66">a</span>
            <span class="char67">c</span>
            <span class="char68">y</span>
            </h4>
        </a>
        <a href="medical.php"><div class="mod7"></div><div class="lie7"></div>
            <h4 class="head7">
            <span class="char71">M</span>
            <span class="char72">e</span>
            <span class="char73">d</span>
            <span class="char74">i</span>
            <span class="char75">c</span>
            <span class="char76">a</span>
            <span class="char77">l</span>
            </h4>
        </a>
        <a href="blog.php"><div class="mod8"></div><div class="lie8"></div>
            <h4 class="head8">
            <span class="char81">B</span>
            <span class="char82">l</span>
            <span class="char83">o</span>
            <span class="char84">g</span>
            </h4>
        </a>
        <a href="shelter.php"><div class="mod9"></div><div class="lie9"></div>
            <h4 class="head9">
            <span class="char91">S</span>
            <span class="char92">h</span>
            <span class="char93">e</span>
            <span class="char94">l</span>
            <span class="char95">t</span>
            <span class="char96">e</span>
            <span class="char97">r</span>
            </h4>
        </a>
        <a href="testimonial.php"><div class="mod10"></div><div class="lie10"></div>
            <h4 class="head10">
            <span class="char101">T</span>
            <span class="char102">e</span>
            <span class="char103">s</span>
            <span class="char104">t</span>
            <span class="char105">i</span>
            <span class="char106">m</span>
            <span class="char107">o</span>
            <span class="char108">n</span>
            <span class="char109">i</span>
            <span class="char1010">a</span>
            <span class="char1011">l</span>
            </h4>
        </a>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="bootstrap/js/jquery-3.1.0.js"></script>
     <script src="bootstrap/js/custom.js"></script>
     <script src="../js/lightbox.min.js" type="text/javascript"></script>
    <script src="../js/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="../js/jquery.fancybox.js" type="text/javascript"></script>
    <script src='//vws.responsivevoice.com/v/e?key=51Wmxso4'></script>
    <script>
        function tapover(){
            document.getElementsByClassName('tap').style.display="block";
        }
    </script>
</body>
</html>
    