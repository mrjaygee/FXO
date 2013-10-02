<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>FXO 4.0 Paper Test (Popular)</title>
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
	<?php include('includes/buttons_popular.php'); ?>
  	<script src="js/jquery-1.10.2.min.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
	<script>
		 $( document ).ready(function() {
		 	// FUNCTIONS
			function button_selection() {		 
				$("button img").each(function(i){
				   $(this).removeClass('selected-button');
				});
			};
			function paper_selection() {		 
				$(".tile").each(function(i){
				   $(this).removeClass('selected-option');
				});
			};	 	
			function flyout_selection() {
				$('#paper_types li').each(function(i){
					$(this).removeClass('selected');
				});
				var arr = [ "div#general", "div#resume", "div#cover" ];
				$.each(arr, function(index, value) {
				       $(arr[index]).fadeOut('fast');
				       //return (this != "three"); // will stop running after "three"
				   });
			};
			
			// FLYOUTS
			$('.mybutton img').eq(0).addClass('selected-button'); // initialize 'Laser (24lb)' buttons 
		 	$("#more-options").click(function() {
		 	  	$('#flyout_tabbed').fadeToggle('fast');
		 	});
			// POPULAR OPTIONS
			$('#laser24').click(function() {
			  	button_selection();
			  	paper_selection()
			  	$('.mybutton img').eq(0).addClass('selected-button');
			  	$('#general .tile').eq(0).addClass('selected-option');
			  	$('.img_preview').removeClass('natural').removeClass('salmon').addClass('white');
			  	$('#flyout_tabbed').fadeOut('fast');
			});
			$('#laser32').click(function() {
			  	button_selection();
			  	paper_selection();
			  	$('.mybutton img').eq(1).addClass('selected-button');
			  	$('#general .tile').eq(1).addClass('selected-option');
			  	$('.img_preview').removeClass('natural').removeClass('salmon').addClass('white');
			  	$('#flyout_tabbed').fadeOut('fast');
			});
			$('#recycled100').click(function() {
			  	button_selection();
			  	paper_selection();
			  	$('.mybutton img').eq(2).addClass('selected-button');
			  	$('#general .tile').eq(5).addClass('selected-option');
			  	$('.img_preview').removeClass('natural').removeClass('salmon').addClass('white');
				$('#flyout_tabbed').fadeOut('fast');
			});

			// FLYOUT CLOSE
			$(".close").click(function() {
			  	$('.flyouts').fadeOut('fast');
			});
			
			// TABS
			$('li#general').click(function() {
				flyout_selection();
				$(this).addClass('selected');
				$('div#general').delay( 400 ).fadeIn('fast');
			});
			$('li#resume').click(function() {
				flyout_selection();
				$(this).addClass('selected');
				$('div#resume').delay( 400 ).fadeIn('fast');
			});
			$('li#cover').click(function() {
				flyout_selection();
				$(this).addClass('selected');
				$('div#cover').delay( 400 ).fadeIn('fast');
			});
			
			// SALMON COLOR SWATCH
			$("#general .tile").eq(10).click(function() {
			  	$('.img_preview').removeClass('natural').addClass('salmon');
			  	paper_selection();
			  	$(this).addClass('selected-option');
				button_selection();
				$('.mybutton img').eq(3).addClass('selected-button');
			});
			// NATURAL COLOR SWATCH
			$("#resume .tile").eq(02).click(function() {
			  $('.img_preview').removeClass('natural').addClass('natural');
			  paper_selection();
			  $(this).addClass('selected-option');
			  button_selection();
			  $('.mybutton img').eq(3).addClass('selected-button');
			});
			// PAGE PREVIEWS
			$('.img_preview').attr()
		 });
	</script>
</body>
</html>
