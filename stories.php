<?php include('header.php');
$sql="SELECT * FROM `story`";
$run=mysqli_query($con,$sql);
?>

<div class="container">
			<div class="bb-custom-wrapper">
				
				<div id="bb-bookblock" class="bb-bookblock">
				<?php
                  while($res=mysqli_fetch_assoc($run))
                  {
                ?>
					<div class="bb-item">
						<div class="bb-custom-side">
							<img src="images/<?php echo $res['img']; ?>"/>
						</div>
						<div class="bb-custom-side">
						    <h1><?php echo $res['title']; ?></h1>
							<p><?php echo $res['disp']; ?></p>
						</div>
					</div>
					<?php
                    }
                    ?>
				</div>

				<nav class="arrows">
					<a id="bb-nav-first" href="#"><i class="fa fa-fast-backward fa-2x" aria-hidden="true"></i></a>
					<a id="bb-nav-prev" href="#"><i class="fa fa-backward fa-2x" aria-hidden="true"></i></a>&ensp;&ensp;
					<a id="bb-nav-next" href="#"><i class="fa fa-forward fa-2x" aria-hidden="true"></i></a>
					<a id="bb-nav-last" href="#"><i class="fa fa-fast-forward fa-2x" aria-hidden="true"></i></a>
				</nav>

			</div>

		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="bookblock/js/jquerypp.custom.js"></script>
		<script src="bookblock/js/jquery.bookblock.js"></script>
		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock({
							speed : 1000,
							shadowSides : 0.8,
							shadowFlip : 0.4
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();
						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );
						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );
						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );
						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );
						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};
							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};
					return { init : init };
			})();
		</script>
		<script>
				Page.init();
		</script>
		
<?php include('footer.php') ?>