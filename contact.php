<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Radiant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	 <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	
	
	<div id="page">


	<div data-load="header.php"></div>

	
<div>
	
</div>
	<div >
 
 
</div>
<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item active">Contact</li>
  
</ol>
</div>
    <header style="display: none;" id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_contact.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contact Us</h1>
							<h2>Lorem ipsum dolor sit amet, te usu laudem graeco.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5  animate-box">
					
					<div class="fh5co-contact-info ">
						<h3>Contact Information</h3>
						<ul>
							<li class="address"> Office No-3, CB-202/A <br>Guru Harikrishan Plaza, Narayana Ring Road, New Delhi, (India)</li>
							<li class="phone" ><a  href="tel:+91 7470813333">+91 7470 81 3333</a></li>
							<li class="email">info@radiantstationery.com</li>
							
						</ul>
					</div>

				</div>

				<div class="col-md-6 col-md-offset-1 animate-box">
					<h3>Get In Touch</h3>
					
					<div class="form-shift-down">
						<div class="row form-group">
							<div class="col-md-6 ">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control shift-input" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary" onClick="sendGetInTouch();">
						</div>
						</div>

						
				</div>

			</div>
			
		</div>
	</div>
	

	</div>

	<div data-load="footer.php"></div>	

	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script type="text/javascript">
$(function(){
    $("[data-load]").each(function(){
        $(this).load($(this).data("load"), function(){
        });
    });
});


function sendGetInTouch(){
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var email = document.getElementById('email').value;
	var message = document.getElementById('message').value;
	

	if(fname==""){
		alert('Please Enter Your First Name');
	}else if(lname==""){
		alert('Please Enter Your Last Email');
	}else if(email==""){
		alert('Please Enter Your Email');
	}else if(message==""){
		alert('Please Enter Your Message');
	}else{

	$.ajax({
	url:"AjaxSendGetInTouch.php",
	data:{FName:fname,
	  LName:lname,
	  Email:email,
	  Message:message
	  },
	type:'post',
	success:function(response){
	  alert(response);

	   $("#fname").val('');
	   $("#lname").val('');
	   $("#email").val('');
	   $("#message").val('');
	  //$('#your_requirnment').modal('hide');
	  
	},
	error: function(xhr, status, error) {
	  var err = eval("(" + xhr.responseText + ")");
	  alert(err.Message);
	}

	});

	}
}
</script>


	

	</body>
</html>

