<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GGH Ports Gallery</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        
       
		<link rel="icon" href="ggh_logo_favicon.png" type="image/png">
	<link rel="shortcut icon" href="ggh_logo_favicon.png" type="img/x-icon">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link href="css/responsive.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
 
    </head>
    <body>
	
	
	
	
		<div class="container" >
			<div class="header" style="background:#2d2d2d;">
				
				<!--<span class="right_ab">
					
				hello</span>
				<span>hello</span>-->
				<div class="clr" style="text-align:center;font-size:20px;"><a href="/index.php"><img src="/peryton/img/ggh_logo.png" style="height:50px;padding-top:15px;"/></a></div>
			</div><!-- header -->
			
			<div class="content">
				
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="images/thumbs/thumbggh9.jpg" data-large="images/img/9.jpg" alt="image01" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh2.jpg" data-large="images/img/2.jpg" alt="image02" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh3.jpg" data-large="images/img/3.jpg" alt="image03" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh4.jpg" data-large="images/img/4.jpg" alt="image04" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh5.jpg" data-large="images/img/5.jpg" alt="image05" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh6.jpg" data-large="images/img/6.jpg" alt="image06" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh7.jpg" data-large="images/img/7.jpg" alt="image07" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh8.jpg" data-large="images/img/8.jpg" alt="image08" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh1.jpg" data-large="images/img/1.jpg" alt="image09" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh10.jpg" data-large="images/img/10.jpg" alt="image10" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh11.jpg" data-large="images/img/11.jpg" alt="image11" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh12.jpg" data-large="images/img/12.jpg" alt="image12" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh13.jpg" data-large="images/img/13.jpg" alt="image13" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh14.jpg" data-large="images/img/14.jpg" alt="image14" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh15.jpg" data-large="images/img/15.jpg" alt="image15" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh16.jpg" data-large="images/img/16.jpg" alt="image16" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh17.jpg" data-large="images/img/17.jpg" alt="image17" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh18.jpg" data-large="images/img/18.jpg" alt="image18" data-description="" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh19.jpg" data-large="images/img/19.jpg" alt="image19" data-description=""" /></a></li>
									<li><a href="#"><img src="images/thumbs/thumbggh20.jpg" data-large="images/img/20.jpg" alt="image20" data-description="" /></a></li>
									
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			
			</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>
    </body>
</html>