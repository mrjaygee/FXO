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
						<li class="current">&nbsp;&nbsp;&nbsp;<span id="paper_type">Laser (24lb) General Use Paper</span></li>
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
				$(".swatch").each(function(i){
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
				});
			};
						
			function general_tab_selection() {
				flyout_selection();
				$('li#general').addClass('selected');
				$('div#general').fadeIn('fast');
			};
			
			// FLYOUTS
			$('.mybutton img').eq(0).addClass('selected-button'); // initialize 'Laser (24lb)' buttons 
		 	$("#more-options").click(function() {
		 	  	$('#flyout_tabbed').fadeToggle('fast');
		 	});

			// FLYOUT CLOSE
			$(".close").click(function() {
			  	$('.flyouts').fadeOut('fast');
			});
			
			$('#continue').click(function() {
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
			
			// POPULAR OPTIONS BUTTONS SELECTION
			$('#laser24').click(function() {
				var currentClass = $('.img_preview').attr("class").split(/\s+/);	

			  	button_selection();
			  	paper_selection();
			  	general_tab_selection();
			  	$('#flyout_tabbed').fadeOut('fast');			  	
			  	$('.mybutton img').eq(0).addClass('selected-button');
			  	$('#general .tile').delay(800).eq(0).addClass('selected-option');
			  	$('#general .tile').delay(800).eq(0).children().addClass('selected-option');
			  	$('.img_preview').removeClass('natural').removeClass('salmon').addClass('white');
			  	$('#paper_type').text('Laser (24lb)' + ' General Use Paper');				
				$('.img_preview').removeClass(currentClass[1]).addClass('white');
			});
			
			$('#laser32').click(function() {
				var currentClass = $('.img_preview').attr("class").split(/\s+/);	

			  	button_selection();
			  	paper_selection();
			  	general_tab_selection();			  	
			  	$('#flyout_tabbed').fadeOut('fast');
			  	$('.mybutton img').eq(1).addClass('selected-button');
			  	$('#general .tile').delay(800).eq(1).addClass('selected-option');
			  	$('#general .tile').delay(800).eq(1).children().addClass('selected-option');
			  	$('.img_preview').removeClass('natural').removeClass('salmon').addClass('white');
			  	$('#paper_type').text('Laser (32lb)' + ' General Use Paper');				
				$('.img_preview').removeClass(currentClass[1]).addClass('white');
			});
			
			$('#recycled100').click(function() {
			  	var currentClass = $('.img_preview').attr("class").split(/\s+/);	

			  	button_selection();
			  	paper_selection();
			  	general_tab_selection();
			  	$('#flyout_tabbed').fadeOut('fast');
			  	$('.mybutton img').eq(2).addClass('selected-button');
			  	$('#general .tile').delay(800).eq(5).addClass('selected-option');
			  	$('#general .tile').delay(800).eq(5).children().addClass('selected-option');
			  	$('#paper_type').text('100% Recycled' + ' General Use Paper');
			  	$('.img_preview').removeClass(currentClass[1]).addClass('white');
			});
			
			// SWATCH SELECTION 
			$("#general .tile").click(function() {
				var myClass = $(this).children().attr("class").split(/\s+/);	
				var currentClass = $('.img_preview').attr("class").split(/\s+/);	
				var niceString =myClass[1].replace("_", " ");
				$('.img_preview').addClass(myClass[1]);	
				paper_selection();
				button_selection();
				$(this).addClass('selected-option');
				$(this).children().addClass('selected-option');
				$('.mybutton img').eq(3).addClass('selected-button');	
				$('#paper_type').text(niceString + ' General Use Paper');
				$('.img_preview').removeClass(currentClass[1]).addClass(myClass[1]);
				//alert("The current class is " + currentClass[1] + " and the new class is " + myClass[1]);
			});
			
			$("#resume .tile").click(function() {
				var myClass = $(this).children().attr("class").split(/\s+/);	
				var currentClass = $('.img_preview').attr("class").split(/\s+/);	
				var niceString =myClass[1].replace("_", " ");
				$('.img_preview').addClass(myClass[1]);	
				paper_selection();
				button_selection();
				$(this).addClass('selected-option');
				$(this).children().addClass('selected-option');
				$('.mybutton img').eq(3).addClass('selected-button');	
				$('#paper_type').text(niceString + ' Résumé Paper');
				$('.img_preview').removeClass(currentClass[1]).addClass(myClass[1]);				
				//alert("The current class is " + currentClass[1] + " and the new class is " + myClass[1]);
			});
			
			$("#cover .tile").click(function() {
				var myClass = $(this).children().attr("class").split(/\s+/);	
				var currentClass = $('.img_preview').attr("class").split(/\s+/);	
				var niceString =myClass[1].replace("_", " ");				
				$('.img_preview').addClass(myClass[1]);	
				paper_selection();
				button_selection();
				$(this).addClass('selected-option');
				$(this).children().addClass('selected-option');
				$('.mybutton img').eq(3).addClass('selected-button');	
				$('#paper_type').text(niceString + ' Card & Cover Stock');
				$('.img_preview').removeClass(currentClass[1]).addClass(myClass[1]);
				//alert("The current class is " + currentClass[1] + " and the new class is " + myClass[1]);
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
