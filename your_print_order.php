<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>FXO 4.0 Your Print Order</title>
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
		<div class="row"><h3>Does everything look good?</h3></div>
	</div>
	<div id="preview">
		<div class="row">
			<?php include('includes/preview_2.php'); ?>
			<div id="sidebar">
				<ul>
					<li class="complete">1 <a href="#">File or Template <span class="edit_link">edit</span></span></a></li>
					<div class="group complete">
						<li class="complete">2 <a href="#">File: MyResume.pdf <span class="edit_link">edit</span></a></li>
						<li class="complete">&nbsp;&nbsp; <a href="#">No Tabs or Inserts <span class="edit_link">edit</span></a></li>
					</div>
					<div class="group complete">
						<li class="complete">3 <a href="#">Black &amp; White Print <span class="edit_link">edit</span></a></li>
						<li class="complete">&nbsp;&nbsp; <a href="#">Double-Sided Print <span class="edit_link">edit</span></a></li>
						<li class="complete">&nbsp;&nbsp; <a href="#">Laser (32lb) General Use Paper <span class="edit_link">edit</span></a></li>
						<li class="complete">&nbsp;&nbsp; <a href="#">No Finishing Options <span class="edit_link">edit</span></a></li>
					</div>
					<li class="current">4 Confirm &amp; Purchase</li>
				</ul>
				<div id="estimate">
					<h3>Estimated Total:<br>$3.95</h3>
					<form method="post" action="">
						<label for="quantity">Quantity:</label>
						<input type="number" name="quantity" value="5" />
					</form>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php include('includes/buttons_your_print_order.php'); ?>
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
			
			function option_selection() {		 
				$(".tile").each(function(i){
				   $(this).removeClass('selected-option');
				});
			};	 	
			
			function flyout_selection() {
				$('.flyouts').fadeOut('fast');
			}
			
			// FLYOUTS
		 	$("#binding").click(function() {
		 	  	flyout_selection();
		 	  	$('#flyout_binding').fadeToggle('fast');
		 	  	//paper_selection();
		 	  	//button_selection();
		 	});
			$("#stapling").click(function() {
				flyout_selection();
			  	$('#flyout_stapling').fadeToggle('fast');
			});
			$("#hole_punching").click(function() {
				flyout_selection();
			  	$('#flyout_hole_punching').fadeToggle('fast');
			});
			
			// FLYOUT CLOSE
			$(".close").click(function() {
			  	$('.flyouts').fadeOut('fast');
			});
			
			
			// HOLE PUNCH OPTIONS
			function set_punch() {
				$('#hole_punch_simulator img').attr("src", "img/hole-punch-no-hole.png");
			}		
			set_punch();
			
			$('#flyout_hole_punching .tile').eq(0).hover(function() {	
				$('#hole_punch_simulator img').attr("src", "img/hole-punch-no-hole.png");
				option_selection();
			});

			$('#flyout_hole_punching .tile').eq(0).click(function() {	
				$('#hole_punch_simulator img').attr("src", "img/hole-punch-no-hole.png");
			  	$('.flyouts').fadeOut('fast');
			  	button_selection();
			  	$('.mybutton img').eq(2).addClass('selected-button');
			  	$('span#finishing_options').text('No Hole Punch');
			});

			$('#flyout_hole_punching .tile').eq(1).hover(function() {	
				$('#hole_punch_simulator img').attr("src", "img/hole-punch-02-hole.png");
				option_selection();
			});

			$('#flyout_hole_punching .tile').eq(1).click(function() {	
				$('#hole_punch_simulator img').attr("src", "img/hole-punch-02-hole.png");
				$('.flyouts').fadeOut('fast');
				button_selection();
			  	$('.mybutton img').eq(2).addClass('selected-button');
			  	$('span#finishing_options').text('2-Hole Punch');
			});
			
			$('#flyout_hole_punching .tile').eq(2).hover(function() {	
				$('#hole_punch_simulator img').attr("src", "img/hole-punch-03-hole.png");
				option_selection();
			});

			$('#flyout_hole_punching .tile').eq(2).click(function() {	
				$('#hole_punch_simulator img').attr("src", "img/hole-punch-03-hole.png");
				$('.flyouts').fadeOut('fast');
				button_selection();
			  	$('.mybutton img').eq(2).addClass('selected-button');
			  	$('span#finishing_options').text('3-Hole Punch');
			});
						
			// PAGE PREVIEWS
			function set_preview() {
				$('.img_preview').attr("src", "img/resume_horiz_2pg_Page_1.png");
			}		
			set_preview();
			$('#arrow_r').click(function() {	
				$('.img_preview').attr("src", "img/resume_horiz_2pg_Page_2.png");
				$('#current_page').val("2");
			});
			$('#arrow_l').click(function() {	
				$('.img_preview').attr("src", "img/resume_horiz_2pg_Page_1.png");
				$('#current_page').val("1");
			});
		 });
	</script>
</body>
</html>
