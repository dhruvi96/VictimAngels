

$(document).ready(function(e){
    $('.cenpen').on('click',function(){
        
        $('.mod1,.line1,.head1').delay(100).css('display','block');
        $('.mod1').delay(100).animate({left:'628px',top:'70px',opacity:'1'},2000);
        $('.head1').delay(100).animate({left:'673px',top:'30px',opacity:'1'},2000);        
        $('.mod2,.line2,.head2').delay(300).css('display','block');
        $('.mod2').delay(100).animate({left:'800px',top:'192px',opacity:'1'},2000);
        $('.head2').delay(100).animate({left:'921px',top:'193px',opacity:'1'},2000);
        $('.mod3,.line3,.head3').delay(500).css('display','block');
        $('.mod3').delay(100).animate({left:'740px',top:'401px',opacity:'1'},2000);
        $('.head3').delay(100).animate({left:'844px',top:'512px',opacity:'1'},2000);
        $('.mod4,.line4,.head4').delay(600).css('display','block');
        $('.mod4').delay(100).animate({left:'528px',top:'410px',opacity:'1'},2000);
        $('.head4').delay(100).animate({left:'530px',top:'516px',opacity:'1'},2000);
        $('.mod5,.line5,.head5').delay(800).css('display','block');
        $('.mod5').delay(100).animate({left:'465px',top:'189px',opacity:'1'},2000);
        $('.head5').delay(100).animate({left:'447px',top:'187px',opacity:'1'},2000);
        $('.mod6,.line6,.head6').delay(1000).css('display','block');
        $('.mod6').delay(100).animate({left:'460px',top:'29px',opacity:'1'},2000);
        $('.head6').delay(100).animate({left:'401px',top:'29px',opacity:'1'},2000);
        $('.mod7,.line7,.head7').delay(1200).css('display','block');
        $('.mod7').delay(100).animate({left:'781px',top:'28px',opacity:'1'},2000);
        $('.head7').delay(100).animate({left:'839px',top:'22px',opacity:'1'},2000);
        $('.mod8,.line8,.head8').delay(1400).css('display','block');
        $('.mod8').delay(100).animate({left:'867px',top:'322px',opacity:'1'},2000);
        $('.head8').delay(100).animate({left:'969px',top:'398px',opacity:'1'},2000);
        $('.mod9,.line9,.head9').delay(1600).css('display','block');
        $('.mod9').delay(100).animate({left:'620px',top:'504px',opacity:'1'},2000);
        $('.head9').delay(100).animate({left:'628px',top:'623px',opacity:'1'},2000);
        $('.mod10,.line10,.head10').delay(1800).css('display','block');
        $('.mod10').delay(100).animate({left:'373px',top:'324px',opacity:'1'},2000);
        $('.head10').delay(100).animate({left:'279px',top:'401px',opacity:'1'},2000);
        $('.quote').css('display','none');
        $('.tap').css('display','none');
       
    }); 
    $(".cenpen").click(function(){
        $("#mods").toggle(1);
    });
    $('.cenpen').hover(function(){
        
        $('.tap').css('display','block');
        
    },function(){
        
        $('.tap').css('display','none');
        
    });
    
    $(".qul").find("li").each(function(i) {
      $(this).delay(500 * i).show(0);
    });
    
    $("#update").click(function(){
        $("#matlo").css({opacity:'1',position:'relative','z-index':' 2'});
        
    });
    $(".matclose").click(function(){
        $("#matlo").css({opacity:'0',position:'absolute','z-index':'-1'});
        
    });
    $("#testbtn").click(function(){
       $(".newtest").css({display:'block','z-index':'2'});
        $('.testmain').css({opacity:'0.1',position:'absolute',top:'170px',left:'329px','z-index':'-1'});
        $(this).css({left:'832px',position:'absolute',top:'50px'});
        $('.testimg').css({opacity:'0.1'});
        $('.testclose').css({'z-index':'3'});
    });
    $(".testclose").click(function(){
       $(".newtest").css({display:'none','z-index':'0'});
        $('.testmain').css({opacity:'1',position:'relative',top:'0px',left:'0px','z-index':'1'});
        $('.testimg').css({opacity:'1'});
        $('.testclose').css({'z-index':'0'});
        $("#testbtn").css({left:'0px',position:'relative',top:'0px'});
    });
    $(".idonate").click(function(){
       $(".dform").css({display:'block','z-index':'2'});
        $(".donor").css({opacity:'0.1','z-index':'0'});
    });
    $(".doclose").click(function(){
       $(".dform").css({display:'none','z-index':'0'});
        $(".donor").css({opacity:'1','z-index':'2'});
    });
    if($(window).width() <= 980){
        $('#ibar').html(' ');
    }
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
});
    $(document).ready(function(e){
    
  /* $('.mod1').on('click',function(){
        $('.mod1').css({zoom:"150%"});
        $('.mod1').animate({rotate:"180deg",width:"400px",height:"400px"},'slow');
        $('.cenpen,.line1,.head1,.mod2,.line2,.head2,.mod3,.line3,.head3,.mod4,.line4,.head4,.mod5,.line5,.head5,.mod6,.line6,.head6,.mod7,.line7,.head7,.mod8,.line8,.head8,.mod9,.line9,.head9,.mod10,.line10,.head10').css('display','none');
    });
    $('.mod5').on('click',function(){
        $('.mod5').animate({rotate:"(360deg)",top:"111px",left:"1439px",width:"400px",height:"400px",zIndex:"1"},'slow');
       $('.mod5').css('transfrom','rotate(0deg)'); $('.cenpen,.line1,.mod2,.line2,.head2,.mod3,.line3,.head3,.mod4,.line4,.head4,.mod1,.line5,.head1,.mod6,.line6,.head6,.mod7,.line7,.head7,.mod8,.line8,.head8,.mod9,.line9,.head9,.mod10,.line10,.head10').css('display','none');
        $('.head5').css({color:'#ff0000',position:'relative',padding:'35px 0px 0px 110px'});
        $('h4 span').css({transfrom:'center',fontSize:'56px',position:'relative'});
        $('.char11,.char12,.char13,.char14,.char15').css({transform:'rotate(0deg)'});
    });*/
});