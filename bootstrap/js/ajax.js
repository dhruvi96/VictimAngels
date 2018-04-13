function ajaxFun(){
    var XMLHttp;
    try{
      XMLHttp = new XMLHttpRequest();
    }catch(e){
        try{
            XMLHttp= new ActiveXObject("Microsoft.XMLHttp");
        }
        catch(e){
            alert("connection error");
            return false;
        }
    }
    XMLHttp.onreadystatechange=function(){
        if(XMLHttp.readyState==4)
            {
                var display= document.getElementById('text');
                display.innerHTML=XMLHttp.responseText;
            }
    }
    var uname=document.getElementById('name').value;
    XMLHttp.open('GET','login.php');
    XMLHttp.send(null);
    
} 
$("#lsubmit").click(function(){
    if($('#name').val()==""||$('#pass').val()=="")
        {
            $('#text').html('Please enter the username and pass');
        }
    else{
        $.post('login.php',$('#myform:input').serializeArray(),
            function(data){
                $('#text').html(data);  
            });
        }
});
