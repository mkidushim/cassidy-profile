<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cassidy Humphrey | Contact</title>
		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Cassidy Humphrey, Humphrey, Cassidy, Cassidy Humphrey Portfolio, Cassidy Humphrey Resume">
		<meta name="description" content="Cassidy Humphrey portfolio website experience Page.">
		<!-- BEGIN STYLESHEETS -->
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/materialadmin.css" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/material-design-iconic-font.min.css" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/materialadmin.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/theme-default/libs/toastr/toastr.css">
		<link type="text/css" rel="stylesheet" href="css/style.css">
	</head>
	<body class="menubar-hoverable header-fixed">
		<div id="base">
			<?php include('header.php');?>
			<div id="content">
				<section>
					<div class="section-body">
						<div class="row">
							<div class="card">
								<div class="card-head style-primary"> <header>Contact</header></div>
								<div class="col-md-6">
									<form class="form" role="form">
										<div class="card-head transparent">
											<header>Get In <span class="color-name">Touch</span></header>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12">
													<div id="marker-map" class="border-gray height-6"></div>
												</div>
											</div>
											<div class="row">
												<ul class="list contact-list">
													<li class="tile">
														<a class="tile-content">
															<div class="tile-icon">
																<div class="icon-circ">
																	<i class="fa fa-map-marker"></i>
																</div>
															</div>
															<div class="tile-text">
																Denver, CO, 80210
															</div>
														</a>
													</li>
													<li class="tile">
														<a class="tile-content ink-reaction" href="tel:+9496063116">
															<div class="tile-icon">
																<div class="icon-circ">
																	<i class="fa fa-phone"></i>
																</div>
															</div>
															<div class="tile-text">
																(949)606-3116
															</div>
														</a>
													</li>
													<li class="tile">
														<a class="tile-content ink-reaction" href="mailto:Cassidy@cassidyhumphrey.com">
															<div class="tile-icon">
																<div class="icon-circ">
																	<i class="fa fa-envelope"></i>
																</div>
															</div>
															<div class="tile-text">
																Cassidy@cassidyhumphrey.com
															</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</form>
								</div>
								<div class="col-md-6">
									<form class="form" role="form">
										<div class="card-head transparent">
											<header>Contact <span class="color-name">Form</span></header>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<input type="text" name="name" class="form-control name" placeholder="Full Name">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<input type="text" name="name" class="form-control email" placeholder="Email Address">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<textarea name="message" class="form-control message" placeholder="Message For Me"></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<!-- <div class="g-recaptcha" data-sitekey="6Lfrhy0UAAAAAOJnyRgC0N4Qoc9gDzg7-XEUJvSe"></div> -->
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<button type="button" class="btn btn-raised btn-primary send-btn">Send Message</button>	
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>	
		</div>
		<!-- BEGIN JAVASCRIPT -->
		<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="assets/js/libs/toastr/toastr.js"></script>
		<script src="assets/js/core/source/App.js"></script>
		<script src="assets/js/core/source/AppNavigation.js"></script>
		<script src="assets/js/core/source/AppCard.js"></script>
		<script src="assets/js/core/source/AppForm.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBObu11OuhJgl9DhpGhufwO2RAp78gJQSs&amp;"></script>
		<script src="assets/js/libs/gmaps/gmaps.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#navbar ul li.contact').addClass('active');
				var markerMap = new GMaps({
					div: '#marker-map',
					lat: 39.7392,
					lng: -104.9903,
					zoom: 11
				});

				markerMap.addMarker({
					lat: 39.7392,
					lng: -104.9903,
					title: 'Denver',
					click: function (e) {
						alert('You clicked in this marker');
					}
				});
				$(document).on('mouseenter','.tile',function(){
					console.log('hover in');
					$(this).find('i').css('color','#777');
				});
				$(document).on('mouseleave','.tile',function(){
					$(this).find('i').css('color','#fff');
					console.log('hover out');
				});
				$(document).on('click','.send-btn',function(){
					var form = new FormData();
					var name = $('.name').val();
					var email =$('.email').val();
					var message = $('.message').val();
					form.append('name',name);
					form.append('email',email);
					form.append('message',message);
	        $.ajax({
	          type: "POST",
	          data: form,
	          contentType: false,
	          cache: false,
	          processData:false,
	          url: "php/submit_form.php", //portal file
	          success: function(data) {
	            if (data.status == "NO") {
	              alert(data.content);
	              return;
	            } else {
								var dc = data.content;
								successMessage(dc);
	            }
	          }
	        });
	      });
			});
			var successMessage = function(message){
				toastr.options.positionClass = 'toast-top-full-width';
				toastr.options.closeButton= 'true';
				toastr.success(message);
			}
			var errorMessage = function(message){
				toastr.options.positionClass = 'toast-top-center';
				toastr.options.closeButton= 'true';
				toastr.error(message);
			}
		</script>
		<!-- Put App.js last in your javascript imports -->
	</body>
</html>