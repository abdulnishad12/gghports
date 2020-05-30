
	<nav class="main-nav-outer" style="z-index:2;"  id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="/" style="font-size:14px;">Home</a></li>
				<li><a href="#about" style="font-size:14px;">About Us</a></li>
				<li><a href="#services" style="font-size:14px;">Services</a></li>
				<li class="small-logo"><a href="#header"><img src="/peryton/img/ggh_logo.png" alt=""></a></li>
				<li><a href="/peryton/gallery/index.php" style="font-size:14px;">Gallery</a></li>
				<li><a href="#ourpeople" style="font-size:14px;">Our People</a></li>
				<li><a href="#contact" style="font-size:14px;">Contact</a></li>
				<li><a id="res-nav_click1" href="#" style="font-size:14px;">close</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
 

 
 <script type="text/javascript">
		$(document).ready(function(e) {

			
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>
	
	 <script type="text/javascript">

$(document).ready(function(e) {

			
			$('#res-nav_click1').click(function() {
				 $(".main-nav").hide();
				return false

			});


		}



 </script>
