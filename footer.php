 
<script scr="owlcarousel/jquery.mousewheel.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
    <!-- career -->
<script src="bootstrap/js/ajax.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="carouselengine2/amazingcarousel.js"></script>
<script src="carouselengine2/initcarousel-1.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/lightbox.min.js" type="text/javascript"></script>
<script src="bootstrap/js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="bootstrap/js/jquery.fancybox.js" type="text/javascript"></script>
<script src="bootstrap/js/custom.js"></script>
<script src="bootstrap/js/modernizr.js"></script>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
   <!-- <input onclick='responsiveVoice.speak("Hey Angel, Your assistant is ready");' type='button' value='🔊 Play' />-->
    <script>
        function mtoggle(){
            var x = document.getElementById('headerm');
            var z = document.getElementById('logom');
            if(x.style.display=="none"){
                x.style.display="block"; 
                z.style.marginLeft="0%"; 
            }
            else{
                if(window.innerWidth>980)
                {
                x.style.display="none";
                z.style.marginLeft="33.3333%"; 
                }
                if(window.innerWidth<=980)
                {
                x.style.display="none";
                z.style.marginLeft="0%"; 
                }
            }
            
          
            var y = document.getElementById('ibar');
            var a = document.getElementById('menuid');
            var b = document.getElementById('headerid');
            if(window.innerWidth>1280)
            {
                if(y.className=="fa fa-close"){
                    y.className="fa fa-bars";
                    a.style.marginLeft="1265px";
                    b.style.backgroundPosition="inherit";

                }
                else{
                    y.className="fa fa-close";
                    a.style.marginLeft="1311px";
                    b.style.backgroundPosition="right";
                }
            }
            if(window.innerWidth<=1280)
            {
                if(y.className=="fa fa-close"){
                    y.className="fa fa-bars";
                    a.style.marginLeft="1198px";
                    b.style.backgroundPosition="inherit";

                }
                else{
                    y.className="fa fa-close";
                    a.style.marginLeft="1243px";
                    b.style.backgroundPosition="right";
                }
            }
            if(window.innerWidth<=1024)
            {
                if(y.className=="fa fa-close"){
                    a.style.marginLeft="987px";

                }
                else{
                    a.style.marginLeft="943px";
                }
            }
            
            if(y.innerHTML==" MENU"){
                y.innerHTML=" ";
            }
            else{
                y.innerHTML=" MENU";
            }
        }
    </script>
    
   
</body>
</html>