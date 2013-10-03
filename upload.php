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
	<div class="fxo-bwiz-container fxo-sw-container" style="height: 673px;">
	    <div class="fxo-sw-sections">
		    <section class="fxo-sw-section" screen="screen" style="height: 673px; z-index: 1;">
			    <div class="fxo-sw-screen-container">
				    <div class="fxo-sw-screen fxo-sw-screen-active" style="top: 0px;">
				        <div class="container">
				            <div class="fxo-bwiz-screen-inner">
				                <div class="fxo-bwiz-white-box">
				                    <div class="fxo-bwiz-file-container">
				                        <div id="fxo-bwiz-file-upload">
					                        <div class="fxo-fileupload-container">
											    <div class="fxo-fileupload-content" style="z-index: -1;">
											        <h3>Drop your file here <img src="/img/concept1/icon-image-watermark.png"></h3>
											        <div class="hero-unit fxo-fileupload-methodbox-narrow">
											            <div class="fxo-fileupload-or-container text-center"> OR</div>
											            <div class="fxo-fileupload-splitbox fxo-fileupload-splitbox-50">
											                <div class="fxo-fileupload-inputbox">
											                    <span class="btn fileinput-button fxo-fileupload-selectbutton btn-primary">
											                        <span>Select From Computer</span>
											                        <input class="fxo-fileupload-input" type="file" name="file">
											                    </span>
											                    <div class="fxo-fileupload-pdfrecommended"><small>PDFs are recommended</small></div>
											                </div>
											            </div>
											            <div class="fxo-fileupload-splitbox fxo-fileupload-splitbox-50" >
											                <button class="btn btn-primary fxo-fileupload-same-frontbutton">Same as Front</button>
											            </div>
											
											            <div class="fxo-fileupload-splitbox fxo-fileupload-splitbox-50">
											                <div class="fxo-fileupload-inputbox">
											                    <button class="btn fxo-fileupload-cloudbutton"><div class="fxo-fileupload-icon-fxo"></div></button>
											                    <button class="btn fxo-fileupload-cloudbutton"><div class="fxo-fileupload-icon-box"></div></button>
											                    <button class="btn fxo-fileupload-cloudbutton"><div class="fxo-fileupload-icon-dropbox"></div></button>
											                    <button class="btn fxo-fileupload-cloudbutton"><div class="fxo-fileupload-icon-googledrive"></div></button>
											                </div>
											
											                <div class="fxo-fileupload-cloudtransfer"><small><strong>Transfer from Cloud Service</strong></small></div>
											            </div>
											            <div class="clearfix"></div>
											        </div>
											    </div>
											    <div class="fxo-fileupload-target fxo-opacity-0" style="z-index: 999;">
											        <div class="fxo-fileupload-target-inner fxo-opacity-50"></div>
											    </div>
											    <div class="fxo-fileupload-progressbar" >
											        <div class="progress progress-striped">
											            <div class="bar" style="width: 0%;"></div>
											        </div>
											        <div class="text-center">Uploading...</div>
							    				</div>
											</div>
										</div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			</section>
		</div>
	</div>
	<!--<div lass="fxo-bwiz-container fxo-sw-container">
		<div class="fxo-sw-screen fxo-sw-screen-active">
			<div class="container">
			    <div class="fxo-bwiz-screen-inner">
			        <div class="fxo-bwiz-white-box">
			            <div class="fxo-bwiz-file-container">
			                <div fxo-file-upload="" id="fxo-bwiz-file-upload" class="ng-isolate-scope ng-scope">
			                	<div class="fxo-fileupload-container">
									<div class="fxo-fileupload-content" style="z-index: -1;">
										<h3>Drop your file here <img src="/img/concept1/icon-image-watermark.png"></h3>
										<div ng-class="{'fxo-fileupload-methodbox-wide': back, 'fxo-fileupload-methodbox-narrow': !back}" class="hero-unit fxo-fileupload-methodbox-narrow">
										    <div class="fxo-fileupload-or-container text-center">OR</div>
										    <div ng-class="{'fxo-fileupload-splitbox-33':back, 'fxo-fileupload-splitbox-50':!back}" class="fxo-fileupload-splitbox fxo-fileupload-splitbox-50">
										        <div class="fxo-fileupload-inputbox">
										            <span ng-class="{'btn-primary': !back}" class="btn fileinput-button fxo-fileupload-selectbutton btn-primary">
										                <span>Select From Computer</span>
										                <input class="fxo-fileupload-input" type="file" name="file">
										            </span>
										
										            <div class="fxo-fileupload-pdfrecommended"><small>PDFs are recommended</small></div>
										        </div>
										    </div>
										    <div ng-class="{'fxo-fileupload-splitbox-33':back, 'fxo-fileupload-splitbox-50':!back}" ng-show="back" class="fxo-fileupload-splitbox fxo-fileupload-splitbox-50" >
										        <button ng-click="sameAsFront()" class="btn btn-primary fxo-fileupload-same-frontbutton">Same as Front</button>
										    </div>
										    <div ng-class="{'fxo-fileupload-splitbox-33':back, 'fxo-fileupload-splitbox-50':!back}" class="fxo-fileupload-splitbox fxo-fileupload-splitbox-50">
										        <div class="fxo-fileupload-inputbox">
										            <button class="btn fxo-fileupload-cloudbutton"><div class="fxo-fileupload-icon-fxo"></div></button>
										            <button class="btn fxo-fileupload-cloudbutton"><div class="fxo-fileupload-icon-box"></div></button>
										            <button class="btn fxo-fileupload-cloudbutton"><div class="fxo-fileupload-icon-dropbox"></div></button>
										            <button class="btn fxo-fileupload-cloudbutton"><div class="fxo-fileupload-icon-googledrive"></div></button>
										        </div>
										        <div class="fxo-fileupload-cloudtransfer"><small><strong>Transfer from Cloud Service</strong></small></div>
										    </div>
										    <div class="clearfix"></div>
										</div>
									</div>
									<div class="fxo-fileupload-target fxo-opacity-0" style="z-index: 999;">
										<div class="fxo-fileupload-target-inner fxo-opacity-50"></div>
									</div>	
									<div class="fxo-fileupload-progressbar" >
										<div class="progress progress-striped">
			    							<div class="bar" style="width: 0%;"></div>
										</div>
										<div class="text-center">Uploading...</div>
									</div>
								</div>
							</div>
			            </div>
			        </div>
			 	</div>
			 </div>
		</div>
	</div>-->
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
				       //return (this != "three"); // will stop running after "three"
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
