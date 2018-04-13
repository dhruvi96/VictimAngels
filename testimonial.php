<?php include('header.php') ?>
<style>
    .testi p{
        font-size: 22px;
    }
    .testides li{
        font-size: 15px;
    }
    
    
</style>
    <img src="images/testimonials.png" class="testimg"/>
    <div class="newtest well">
        <div class="closebtn">
            <button class="testclose btn btn-default"><i class="fa fa-close"></i></button>
        </div>
        <form action="testimonial.php" method="POST" role="form" enctype="multipart/form-data">
            <legend style="color:#fff;">Add your testimonial</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <label for="img">Upload Image</label>
                <input type="file" id="img" name="img" placeholder="Upload">
            </div>
            <div class="form-group">
                <label for="desig">Designation</label>
                <input type="text" id="desig" name="desig" class="form-control" placeholder="Your Designation">
            </div>
            <div class="form-group">
                <label for="">Share your experience</label>
                <textarea type="text" class="form-control" id="newtest" name="newtest" placeholder="All good or bad comments are accepted here"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form> 
    </div>
    <?php
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $img=$_FILES['img']['name'];
            $timg=$_FILES['img']['tmp_name'];
            move_uploaded_file($timg,"images/testi/".$img);
            $desig=$_POST['desig'];
            $test=$_POST['newtest'];
            $sql="INSERT INTO `testimonial` (`desp`,`name`,`img`,`desig`)VALUES('$test','$name','$img','$desig')";
            $run=mysqli_query($con,$sql);
            if($run)
            {
                ?><script>alert("Your testimonial is submitted");</script> <?php
            }
            else
            {
                ?><script>alert("Error!");</script> <?php
            }
        }
        $sql1="SELECT * FROM `testimonial`";
        $run1=mysqli_query($con,$sql1);
        $row=mysqli_num_rows($run1);
    ?>
    <div class="testmain">
    <button id="testbtn" style="float:right;" class="btn btn-primary">Say Something..</button>
    <div class="cd-testimonials-wrapper cd-container">
	<ul class="cd-testimonials testi">
	<?php
	while($res=mysqli_fetch_assoc($run1))
    {
    ?>
		<li>
			<p><?php echo $res['desp']; ?></p>
			<div class="cd-author">
				<img src="images/testi/<?php echo $res['img']; ?>" alt="Author image">
				<ul class="cd-author-info testidesp">
					<li><?php echo $res['name']; ?></li>
					<li><?php echo $res['desig']; ?></li>
				</ul>
			</div>
		</li>
<?php } ?>
<!--
		<li>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
			<div class="cd-author">
				<img src="img/avatar-2.jpg" alt="Author image">
				<ul class="cd-author-info testidesp">
					<li>MyName</li>
					<li>Designer, CodyHouse</li>
				</ul>
			</div>
		</li>

		<li>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
			<div class="cd-author">
				<img src="img/avatar-3.jpg" alt="Author image">
				<ul class="cd-author-info">
					<li>MyName</li>
					<li>CEO, CompanyName</li>
				</ul>
			</div>
		</li>
-->
		
	</ul>  <!--cd-testimonials -->

	<a href="#" class="cd-see-all" style="font-size:15px">See all</a>
	
</div> <!-- cd-testimonials-wrapper -->
<div class="cd-testimonials-all">
	<div class="cd-testimonials-all-wrapper">
	<?php
$sql2="SELECT * FROM `testimonial`";
        $run2=mysqli_query($con,$sql2);
        $row2=mysqli_num_rows($run2);        
?>
		<ul>
		<?php
            while($res2=mysqli_fetch_assoc($run2))
        {
        ?>
			<li class="cd-testimonials-item">
				<p><?php echo $res2['desp'];?></p>
				<div class="cd-author">
					<img src="images/testi/<?php echo $res2['img'];?>" alt="Author image">
					<ul class="cd-author-info">
						<li><?php echo $res2['name'];?></li>
						<li><?php echo $res2['desig'];?></li>
					</ul>
				</div> <!-- cd-author -->
			</li>
        <?php } ?>
			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
				
				<div class="cd-author">
					<img src="img/avatar-2.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
				
				<div class="cd-author">
					<img src="img/avatar-3.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
				
				<div class="cd-author">
					<img src="img/avatar-4.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
				
				<div class="cd-author">
					<img src="img/avatar-5.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
				
				<div class="cd-author">
					<img src="img/avatar-6.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
				
				<div class="cd-author">
					<img src="img/avatar-1.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
				
				<div class="cd-author">
					<img src="img/avatar-2.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
				
				<div class="cd-author">
					<img src="img/avatar-3.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
				
				<div class="cd-author">
					<img src="img/avatar-4.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
				
				<div class="cd-author">
					<img src="img/avatar-5.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
				
				<div class="cd-author">
					<img src="img/avatar-6.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			</li>
		</ul>
	</div>	<!-- cd-testimonials-all-wrapper -->

	<a href="#0" class="close-btn">Close</a>
</div> <!-- cd-testimonials-all -->
</div>
<script src="bootstrap/js/jquery-2.1.1.js"></script>
<script src="bootstrap/js/masonry.pkgd.min.js"></script>
<script src="bootstrap/js/jquery.flexslider-min.js"></script>
<script src="bootstrap/js/main.js"></script> <!-- Resource jQuery --
<?php include('footer.php') ?>