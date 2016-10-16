<!DOCTYPE html>
<html>
<head>
	<title>Beijing Long an hua chang || Official</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
	<link rel="stylesheet" href="bootstrap-sass/assets/stylesheets/_bootstrap.scss" />
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\navbar-fixed-side.css">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<link href="css/navbar-fixed-side.css" rel="stylesheet" />
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<script type="text/javascript" src="js/scripts.js"></script>
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<!-- End WOWSlider.com HEAD section -->
<!-- Add jQuery library -->
	<script type="text/javascript" src="fancyBox/lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
<script>
		$(window).ready(function(){
		var width = $(this).width();
		if(width >769){
			$('.desktop-project-custom').css('display','block');
		}
		if((width < 770) && (width > 481)){
			$('.tablet-project-custom').css('display','block');
			$('.tablet-project-custom').css('margin-top','15%');
		}
		if(width < 482){
			$('.tablet-project-custom').css('display','block');
            $('.tablet-project-custom').css('margin-top','32%');
		}
		});
</script>
</head>
<body style="background:black;">

<?php
require_once'header.php';
?>
<div class="container container-customize"></div>

<!-- 2 number kaam -->
<div class="row-fluid row-fluid-custom desktop-project-custom">
    <div class="col-lg-12 col-md-10 ">
        <div class="cover-container">
            <!-- START PANEL -->
            <a class="fancybox" href="images/latest plan A level qualifications.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/latest plan A level qualifications.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Plan A Level Qualification</h4></div>
            </div></a>
            <a class="fancybox" href="images/copies of municipal.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/copies of municipal.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">2016 Copies of Municipal</h4></div>
            </div></a>
            <a class="fancybox" href="images/Credit rating certificate.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Credit rating certificate.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Credit Rating Certificate</h4></div>
            </div></a>
            <a class="fancybox" href="images/Beijing Long An Huacheng Nanning Branch.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Beijing Long An Huacheng Nanning Branch.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Nanning Branch</h4></div>
            </div></a>
            <a class="fancybox" href="images/A copy of the business license.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/A copy of the business license.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Business License</h4></div>
            </div></a>
            <a class="fancybox" href="images/Proof of business license.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Proof of business license.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Proof Of Business License</h4></div>
            </div></a>
            <a class="fancybox" href="images/Quality System.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Quality System.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Quality System</h4></div>
            </div></a>
            <a class="fancybox" href="images/Grade A copy of the Long An municipal, construction.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Grade A copy of the Long An municipal, construction.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Municipal Construction</h4></div>
            </div></a>
            
            <!-- END PANEL -->
        </div>
    </div>
</div>

<div class="tablet-project-custom">
<div class="col-lg-12 col-md-10 ">
        <div class="cover-container">
	<a class="fancybox" href="images/latest plan A level qualifications.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/latest plan A level qualifications.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Plan A Level Qualification</h4></div>
            </div></a>
            <a class="fancybox" href="images/copies of municipal.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/copies of municipal.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">2016 Copies of Municipal</h4></div>
            </div></a>
            <a class="fancybox" href="images/Credit rating certificate.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Credit rating certificate.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Credit Rating Certificate</h4></div>
            </div></a>
            <a class="fancybox" href="images/Beijing Long An Huacheng Nanning Branch.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Beijing Long An Huacheng Nanning Branch.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Nanning Branch</h4></div>
            </div></a>
            <a class="fancybox" href="images/A copy of the business license.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/A copy of the business license.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Business License</h4></div>
            </div></a>
            <a class="fancybox" href="images/Proof of business license.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Proof of business license.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Proof Of Business License</h4></div>
            </div></a>
            <a class="fancybox" href="images/Quality System.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Quality System.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Quality System</h4></div>
            </div></a>
            <a class="fancybox" href="images/Grade A copy of the Long An municipal, construction.jpg" data-fancybox-group="gallery">
            <div class="cover-item">
            	<img src="images/Grade A copy of the Long An municipal, construction.jpg" class="img-responsive img-thumbnail"/>
            	<div class="caption caption-custom"><h4 class="text-center">Municipal Construction</h4></div>
            </div></a>
            </div>
            </div>
</div>
<!-- Commercial Buildings Modal -->
<div class="modal fade" id="Commercial">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
			<button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
		<div class="modal-title">Plan A Level Qualification</div>
	</div>
	<div class="modal-body">
			<img src="images/latest plan A level qualifications.jpg" class="img-responsive"/>
		</div>
		<div class="modal-footer">
			
		</div>
	
	</div>
</div>
</div>
<!-- residential Buildings Modal -->
<div class="modal fade" id="residential">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
			<button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
		<div class="modal-title">2016 Copies of Municipal</div>
	</div>
		<div class="modal-body">
			<img src="images/copies of municipal.jpg" class="img-responsive"/>
		</div>
	
	<div class="modal-footer">
	</div>
	</div>
</div>
</div>
<!-- street Buildings Modal -->
<div class="modal fade" id="street">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
			<button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
		<div class="modal-title">Credit Rating Certificate</div>
	</div>
		<div class="modal-body">
			<img src="images/Credit rating certificate.jpg" class="img-responsive"/>
		</div>
	
	<div class="modal-footer">
		
	</div>
	</div>
</div>
</div>
<!-- culturesports Buildings Modal -->
<div class="modal fade" id="culturesports">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
			<button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
		<div class="modal-title">Nanning Branch</div>
	</div>
		<div class="modal-body">
			<img src="images/Beijing Long An Huacheng Nanning Branch.jpg" class="img-responsive"/>
		</div>
	
	<div class="modal-footer">
		
	</div>
	</div>
</div>
</div>
<!-- industrial Buildings Modal -->
<div class="modal fade" id="industrial">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
			<button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
		<div class="modal-title">Business License</div>
	</div>
		<div class="modal-body">
			<img src="images/A copy of the business license.jpg" class="img-responsive"/>
		</div>
	
	<div class="modal-footer">
		
	</div>
	</div>
</div>
</div>
<!-- interior Buildings Modal -->
<div class="modal fade" id="interior">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
			<button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
		<div class="modal-title">Proof Of Business License</div>
	</div>
		<div class="modal-body">
			<img src="images/Proof of business license.jpg" class="img-responsive"/>
		</div>
	
	<div class="modal-footer">
		
	</div>
	</div>
</div>
</div>
<!-- Medical Buildings Modal -->
<div class="modal fade" id="Medical">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
			<button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
		<div class="modal-title">Quality System</div>
	</div>
		<div class="modal-body">
			<img src="images/Quality System.jpg" class="img-responsive"/>
		</div>
	
	<div class="modal-footer">
		
	</div>
	</div>
</div>
</div>
<!-- office Buildings Modal -->
<div class="modal fade" id="office">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
			<button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
		<div class="modal-title">Municipal Construction</div>
	</div>
		<div class="modal-body">
			<img src="images/Grade A copy of the Long An municipal, construction.jpg" class="img-responsive"/>
		</div>
	
	<div class="modal-footer">
		
	</div>
	</div>
</div>
</div>
</body>
</html>

