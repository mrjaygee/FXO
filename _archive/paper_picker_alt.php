<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>FXO 4.0 Paper Test (alt)</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/base.css" />
  <link rel="stylesheet" href="css/styles2.css" />
  <link rel="stylesheet" href="css/flyout.css" />
  <link rel="stylesheet" href="css/swatches.css" />
  <link rel="stylesheet" href="css/buttons.css" />   
</head>
<body>
	<div id="topbar">
		<div class="row">
			<img src="img/menu.png" alt="menu" />
		</div>
	</div>
	<div id="preview">
		<div class="row">
			<div id="print_preview">
				<!--<div class="arrow_t"></div><div class="arrow_b"></div>-->
				<img src="img/2pg-spread.jpg" alt="Preview Image" />
				<div class="preview-control-container">
				    <button title="Show previous page">«</button> 
				    <span class="fxo-build-pagenum">1</span> of <span class="fxo-build-pagenum">2</span> 
				    <button class="btn disabled" title="Show next page">»</button>
				</div>
				<!--<div class="arrow_l"></div><div class="arrow_r"></div>-->
			</div>
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
					<h4>Estimated Total:<br>$0.79</h4>
					<form method="post" action="">
						<label for="quantity">Quantity:</label>
						<input type="number" name="quantity" value="1" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="question">
		<div class="row"><h3>What type of paper would you like to use?</h3></div>
		<div id="options"class="row">
			<p>Popular Paper Options</p>
			<button class="mybutton"><img src="img/check-button-icon1.png" alt="" />&nbsp;&nbsp;Laser <span>(24lb)</span></button> <button class="mybutton">Laser <span>(32lb)</span></button> <button class="mybutton">100% Recycled</button> <button id="more-options" class="mybutton active"><img src="img/more-button-icon3.png" alt="" />&nbsp;&nbsp; More Papers</button>
		</div>
	</div>
	<?php include('includes/flyout.php'); ?>
  <script src="js/jquery-1.10.2.min.js"></script>
  <script>
	 $( document ).ready(function() {
	 	$("#more-options").click(function() {
	 	  $('#flyout').fadeToggle('fast');
	 	});
	 });
  </script>
</body>
</html>
