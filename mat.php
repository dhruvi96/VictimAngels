<?php include('header.php') ;
if(isset($_SESSION['mid']))
{
    if($_SESSION['gen']=='female')
    {
        header('location:matgirl.php');
    }
    else
    {
        header('location:matboy.php');
    }
}
?>

   <style>
    label{
        font-size:15px;
        color:#000;
    }   
    #matlo{
        opacity: 0; 
        z-index: -1;
        background-color: rgba(1,1,1,0.6);
        position: absolute;
    }
       .matdiv{
           z-index: 1;
           position: absolute;
           top:160px;
       }
       .closebtn{
            margin-left: 997px;
            margin-top: 10px;
            position: absolute;
            z-index: 3;
       }
</style>
<div class="matlo" id="matlo">
       <div class="row">
          <div class="closebtn">
                  <button class="matclose btn btn-default"><i class="fa fa-close"></i></button>
              </div>
           <div class="col-md-6 col-md-offset-3 well regform" style="margin-top:10px;">    
               <form action="mat.php" method="POST" role="form" enctype="multipart/form-data" >
                    <legend>Registration</legend>
                    <div class="form-group">
                        <dl><dt><label for="regi">Matrimony Profile for</label></dt><dd>
                        <select name="regi" class="form-control"><option value="0">-Select-</option><option value="myself">Myself</option><option value="son">Son</option><option value="daughter">Daughter</option><option value="brother">Brother</option><option value="sister">Sister</option><option value="relative">Relative</option><option value="friend">Friend</option></select></dd></dl>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" style="width:50%;" name="name"/>
                    </div>
                    <div class="form-group">
                    <label for="gender">Gender</label><br>
                        <label for="female">Female</label>
                        <input type="radio" name="gender" value="female"/>
                        <label for="male">male</label>
                        <input type="radio" name="gender" value="male"/>
                    </div>
                    <label for="age">Date of birth</label><div class="fleft">
				    <select name="dobday" class="form-control" style="width:auto;float:left" class="inputcon"><OPTION value="0" selected>DD</OPTION><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>   
                    <select name="dobmonth" style="width:auto;float:left" class="form-control" id="dobmonth"><OPTION value="0" selected>MM</OPTION><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
											   
				    
				    <input type="text" name="dobyear" style="width:80px;float:left" class="form-control" ID="dobyear" placeholder="YYYY" class="inputcon">
                   </div><br><br><br>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" style="width:50%;" name="city"/>
                    </div>
                    <div class="form-group">
                    <label for="religion">Religion</label>
				    <select  name="religion" id="religion" size="1"  class="form-control" ><option value="0"> Select Religion </option><option value="1">Hindu</option><option value="10">Muslim - Shia</option><option value="11">Muslim - Sunni</option><option value="2">Muslim - Others</option><option value="12">Christian - Catholic</option><option value="13">Christian - Orthodox</option><option value="14">Christian - Protestant</option><option value="3">Christian - Others</option><option value="4">Sikh</option><option value="15">Jain - Digambar</option><option value="16">Jain - Shwetambar</option><option value="5">Jain - Others</option><option value="6">Parsi</option><option value="7">Buddhist</option><option value="8">Inter-Religion</option><option value="9">No Religious Belief</option></select>
                   </div>
                   <div class="form-group">
                   <label for="mothertounge">Mother Tongue</label><select  name="mothertounge" id="mothertounge" size="1"   class="form-control"><option value="0">Select Mother Tongue</option><option value=54>Angika</option><option value=1>Arunachali</option><option value=2>Assamese</option><option value=3>Awadhi</option><option value=4>Bengali</option><option value=5>Bhojpuri</option><option value=6>Brij</option><option value=7>Bihari</option><option value=53>Badaga</option><option value=8>Chatisgarhi</option><option value=9>Dogri</option><option value=10>English</option><option value=11>French</option><option value=12>Garhwali</option><option value=13>Garo</option><option value=14>Gujarati</option><option value=15>Haryanvi</option><option value=16>Himachali/Pahari</option><option value=17 >Hindi</option><option value=18>Kanauji</option><option value=19>Kannada</option><option value=20>Kashmiri</option><option value=21>Khandesi</option><option value=22>Khasi</option><option value=23>Konkani</option><option value=24>Koshali</option><option value=25>Kumoani</option><option value=26>Kutchi</option><option value=27>Lepcha</option><option value=28>Ladacki</option><option value=29>Magahi</option><option value=30>Maithili</option><option value=31>Malayalam</option><option value=32>Manipuri</option><option value=33>Marathi</option><option value=34>Marwari</option><option value=35>Miji</option><option value=36>Mizo</option><option value=37>Monpa</option><option value=38>Nicobarese</option><option value=39>Nepali</option><option value=40>Oriya</option><option value=41>Punjabi</option><option value=42>Rajasthani</option><option value=43>Sanskrit</option><option value=44>Santhali</option><option value=45>Sindhi</option><option value=46>Sourashtra</option><option value=47>Tamil</option><option value=48>Telugu</option><option value=49>Tripuri</option><option value=50>Tulu</option><option value=51>Urdu</option></select>
                   </div>
                   <div class=form-group>
                   <label for="country">Country living in</label><select class="form-control" name="country" id="country" size="1"><option value="0">Select Country living in</option><option value="98" style="color:#004F00">India</option><option value="222" style="color:#004F00">United States of America</option><option value="220" style="color:#004F00">United Arab Emirates</option><option value="221" style="color:#004F00">United Kingdom</option><option value="13" style="color:#004F00">Australia</option><option value="189" style="color:#004F00">Singapore</option><option value="39" style="color:#004F00">Canada</option><option value="173" style="color:#004F00">Qatar</option><option value="114" style="color:#004F00">Kuwait</option><option value="161" style="color:#004F00">Oman</option><option value="17" style="color:#004F00">Bahrain</option><option value="185" style="color:#004F00">Saudi Arabia</option><option value="129" style="color:#004F00">Malaysia</option><option value="80" style="color:#004F00">Germany</option><option value="153" style="color:#004F00">New Zealand</option><option value="73" style="color:#004F00">France</option><option value="102" style="color:#004F00">Ireland</option><option value="203" style="color:#004F00">Switzerland</option><option value="193" style="color:#004F00">South Africa</option><option value="195" style="color:#004F00">Sri Lanka</option><option value="99" style="color:#004F00">Indonesia</option><option value="149" style="color:#004F00">Nepal</option><option value="162" style="color:#004F00">Pakistan</option><option value="18" style="color:#004F00">Bangladesh</option><option value="1" style="color:#004F00">Afghanistan</option><option value="888" style="color:#004F00">Show more options</option></select>
                   </div>
                   <div class="form-group">
                       <label for="mobile"  style="position:relative;top:10px;">Mobile No.</label><br><br><select name="concode" class="form-control" style="width:20%;float:left"><option selected="" value="0">Country</option><option value="98" style="color:#004F00">+91</option><option value="222" style="color:#004F00">+1</option><option value="220" style="color:#004F00">+971</option><option value="221" style="color:#004F00">+44</option><option value="13" style="color:#004F00">+61</option><option value="189" style="color:#004F00">+65</option><option value="39" style="color:#004F00">+1</option><option value="173" style="color:#004F00">+974</option><option value="114" style="color:#004F00">+965</option><option value="161" style="color:#004F00">+968</option><option value="17" style="color:#004F00">+973</option><option value="185" style="color:#004F00">+966</option><option value="129" style="color:#004F00">+60</option><option value="80" style="color:#004F00">+49</option><option value="153" style="color:#004F00">+64</option><option value="73" style="color:#004F00">+33</option><option value="102" style="color:#004F00">+353</option><option value="203" style="color:#004F00">+41</option><option value="193" style="color:#004F00">+27</option><option value="195" style="color:#004F00">+94</option><option value="99" style="color:#004F00">+62</option><option value="149" style="color:#004F00">+977</option><option value="162" style="color:#004F00">+92</option><option value="18" style="color:#004F00">+880</option><option value="1" style="color:#004F00">+93</option><option value="no" style="color:#004F00">Show more countries</option></select>
                    <input type="text" maxlength="10" minlength="10" style="width:80%;float:left" class="form-control" name="mobile"/>
                   </div><br><br>
                   <div class="form-group">
                       <label for="email">E-mail</label>
                       <input type="email" name="email" id="email" class="form-control" />
                   </div>
                   <div class="form-group">
                       <label for="img">Upload Image</label>
                       <input type="file" name="img" id="img" />
                   </div>
                    <div class="form-group">
                       <label for="pasword">Login Password</label><input type="password" name="pass" id="pass" class="form-control" maxlength="15" />
                   </div>
                   <div class="form-group">
                       <label for="pasword">Confirm Password</label><input type="password" name="cpass" id="cpass" class="form-control" maxlength="15" />
                   </div>
                    <input type="submit" class="btn btn-warning" text-align="center" name="submit" value="Register">
                </form>

           </div>
       </div>
   </div>
   <?php
        
if(isset($_POST['submit']))
    {
        $regi=$_POST['regi'];
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $dobd=$_POST['dobday'];
        $dobm=$_POST['dobmonth'];
        $doby=$_POST['dobyear'];
        $city=$_POST['city'];
        $reli=$_POST['religion'];
        $mothert=$_POST['mothertounge'];
        $country=$_POST['country'];
        $concode=$_POST['concode'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $img=$_FILES['img']['name'];
        $timg=$_FILES['img']['tmp_name'];
        move_uploaded_file($timg,"images/mat/".$img);
        $pw=$_POST['pass'];
        $cpw=$_POST['cpass'];
    if($pw==$cpw)
    {
        $sql2="INSERT INTO `matrimonial` (`for`,`name`,`gender`,`dobd`,`dobm`,`doby`,`city`,`religion`,`mtongue`,`country`,`ccode`,`mobile`,`email`,`img`,`pass`) VALUES('$regi','$name','$gender','$dob','$dobm','$doby','$city','$reli','$mothert','$country','$concode','$mobile','$email','$img','$pw')";
        $run2=mysqli_query($con,$sql2);
        if($run2)
        {
            ?>
            <script>alert('Inserted successfully') ;
                window.open('mat.php','_self') </script>
            <?php
        }
        else
        {
            ?>
            <script>alert('something wents wrong'); </script>
            <?php   
        }
    }
    else
    {
         ?>
        <script>alert('Password didnt match'); </script>
        <?php 
    }
}
    ?>
<div class="matdiv">   
<?php include('dbkon.php');
if(!isset($_SESSION['uid']))
{
    ?>
    <div class="well loginp mlogin">
    <div class="nloginp">
        <form action="mat.php" id="myform" method="POST" role="form">
            <legend style="color:#000;">Login For Matrimonial</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                <p id="text"></p>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter your password">
            </div>
            <button type="submit" name="submit" onclick="ajaxFun" class="btn btn-danger lbtn" id="lsubmit">Login</button>
        </form>
        <h3><span data-toggle="lightbox" style="color:#000;cursor:pointer" class="fancybox fancybox.iframe" id="update">Create a new account</span></h3>
    </div>
<?php
if(isset($_POST['submit']))
{
    $_POST=array_map('strip_tags',$_POST);
    $name=mysql_real_escape_string($_POST['name']);
    $pass=mysql_real_escape_string($_POST['pass']);
    $sql="SELECT * FROM `matrimonial` WHERE `name`='$name' AND `pass`='$pass'";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?><script>alert('Login Error! Please check username or password');
                    window.open('mat.php','_self');
            </script><?php
    }
    else
    {
        ?><script>alert('Login Successful');</script><?php
        $res=mysqli_fetch_assoc($run);
        $_SESSION['mid']=$res['m_id'];
        $_SESSION['mname']=$res['name'];
        $_SESSION['img']=$res['img'];
        $_SESSION['gen']=$res['gender'];
        if($res['gender']=='female')
        {
            header('location:matgirl.php');
        }
        else
        {
            header('location:matboy.php');
        }
        
    }
}
?>
</div>
    <?php
}
else
{
    header('location:matgirl.php');
}
?>
</div>
<?php include('footer.php') ?>