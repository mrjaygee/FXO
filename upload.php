<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>FXO 4.0 Upload Anything</title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/base.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/upload.css" />
</head>
<body>
	<div id="topbar">
		<div class="row">
			<img src="img/menu.png" alt="menu" />
		</div>
	</div>
	<div id="question">
		<div class="row"><h3>What type of paper would you like to use?</h3></div>
	</div>
	<div id="preview">
		<div class="row">
			<?php include('includes/upload_area.php'); ?>
			<div id="sidebar">
				<ul>
					<li class="complete">1 <a href="#">File or Template <span class="edit_link">edit</span></span></a></li>
					<div class="group">
						<li class="current">2 Upload your file</li>
					</div>
					<li>3 Print Options</li>
					<li>4 Confirm &amp; Purchase</li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
  	<script src="js/jquery-1.10.2.min.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
	<script>
		 $( document ).ready(function() {
		 	// FUNCTIONS			
			$(".fileupload-cloudbutton").hover(function() {
				var myIndex = $(this).index();
				//alert(myIndex);
				$(".tooltip").eq(myIndex).fadeToggle('fast');
			});					
				
		 });
	</script>
</body>
</html>
