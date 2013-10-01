<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>FXO 4.0 Paper Test (Categories)</title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/base.css" />
	<link rel="stylesheet" href="css/main.css" />
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
			<?php include('includes/preview_2.php'); ?>
			<div id="sidebar">
				<ul>
					<li class="complete">1 <a href="#">File or Template <span class="edit_link">edit</span></span></a></li>
					<li class="complete">2 <a href="#">File: MyResume.pdf <span class="edit_link">edit</span></a></li>
					<div class="group">
						<li class="complete">3 <a href="#">Black &amp; White Print <span class="edit_link">edit</span></a></li>
						<li class="complete">&nbsp;&nbsp; <a href="#">Double-Sided Print <span class="edit_link">edit</span></a></li>
						<li class="current">&nbsp;&nbsp; Paper Type</li>
						<li>&nbsp;&nbsp; Finishing Options</li>
					</div>
					<li>4 Confirm &amp; Purchase</li>
				</ul>
				<div id="estimate">
					<h3>Estimated Total:<br>$0.79</h3>
					<form method="post" action="">
						<label for="quantity">Quantity:</label>
						<input type="number" name="quantity" value="1" />
					</form>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php include('includes/buttons_categories.php'); ?>
  	<script src="js/jquery-1.10.2.min.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
	<script>
		 $( document ).ready(function() {
			function paper_selection() {		 
				$(".tile").each(function(i){
				   $(this).removeClass('selected-option');
				});
			};
				 	
		 	$("#general_use").click(function() {
		 	  $('#flyout_general').fadeToggle('fast');
		 	});
			$("#resume").click(function() {
			  $('#flyout_resume').fadeToggle('fast');
			});
			$("#cover").click(function() {
			  $('#flyout_cover').fadeToggle('fast');
			});
			$("#flyout_general .tile").eq(10).click(function() {
			  $('.img_preview').addClass('salmon');
			  paper_selection();
			  $(this).addClass('selected-option');
			});
			$("#flyout_resume .tile").eq(02).click(function() {
			  $('.img_preview').addClass('natural');
			  paper_selection();
			  $(this).addClass('selected-option');
			});

		 });
	</script>
</body>
</html>
