<!DOCTYPE HTML>
<html>

	<body>

	<div class="container">
    <div class="modal fade" id="enquiry_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <img src="images/enquiry_icon.png"/>
          <h4>--- Business Enquiry ---</h4>
        </div>
        <div class="modal-body">
              
        
         <div class="row">
         <div class="col-md-12">
         	<label>Name</label>
               <i class="fa fa-user-o input-inner-icon"></i>
         	<input type="text" name="" class="form-control" placeholder="Enter Your Name" id="product_enquiry_name" required>
         	</div>
           <div class="col-md-12">
         	<label>Email</label>
         	<i class="fa fa-envelope-o input-inner-icon"></i>
         	<input type="email" name="" class="form-control" placeholder="Enter Your Email" id="product_enquiry_email" required>

         	<input type="hidden" name="" class="form-control" id="product_enquiry_ProductName">
            <input type="hidden" name="" class="form-control" id="product_enquiry_siteName">

         </div>	
          <div class="col-md-12">
         	<label>Phone Number</label>
         	<img src='images/phone_inner_icon.png' class="input-img"/>
         	<input type="number" name="" class="form-control" placeholder="Enter Your Phone Number" id="product_enquiry_phone" required>
         	</div>
         	 <div class="col-md-12">
         	<label>Your Message</label>
         	<img src='images/message_inner_icon.png' class="input-img"/>
         	<textarea class="form-control-textarea" rows="3" cols="3" placeholder="Write Your Message Here" id="product_enquiry_message" required></textarea>
         	</div>
         	<center><button class="btn btn-primary" onclick="submitProductEnquiry();">Send</button></center>
         	</div>
         
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>

	<nav class="fh5co-nav" role="navigation">
		
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div id="fh5co-logo">
							<a href="index.php"><img src="images/radiant_logotagline.png" /></a>
						</div>
					</div>
                        

                        <div class="menu-1">
						<ul class="" >
							<li class="active offcanvas-has-dropdown">
							<a ><img src="images/nav_icon/home_icon.png"/>&nbsp;The Company</a>
							<ul class="dropdown sub-category">
									<li><a href="philosophy.php"><img src="images/philosophy.png"/>&nbsp;Our Philosophy</a></li>
									<li><a href="sustainability.php"><img src="images/sustainability.png"/>&nbsp;Sustainability</a></li>
								</ul>
							</li>
							<li><a href="custom.php"><img src="images/nav_icon/custom_icon.png"/>&nbsp;Customize</a></li>
							<li ><a href="product.php" ><img src="images/nav_icon/product_icon.png"/>&nbsp;Products</a></li>
							<li><a href="contact.php"><img src="images/nav_icon/contact_icon.png"/>&nbsp;Contact</a></li>
						</ul>
					</div>

					<div class="col-md-6 col-md-offset-1 responsive-contact-header">
						<div class="row">
							<div class="col-md-6 ">
								<ul class="header-contact-info">
									<li class="contact-icon">
										<img src="images/phone_icon.png"/>
									</li>
									<li>
									<div class="contact-heading">Phone</div>
									<a href="tel:+91 7470813333" style="color:#828282;">+91 7470 81 3333</a> 
									</li>
								</ul>
							</div>
							<div class="col-md-6 responsive-shift-top upper-contact-info">
								<ul class="header-contact-info ">
									<li class="contact-icon"><img src="images/envelope_icon.png"/></li>
									<li>
									<div class="contact-heading">Email</div>
                   <a href="mailto:info@radiantstationery.com?Subject=" target="_top" style="color:#828282;">info@radiantstationery.com</a>

									<!-- <p>info@radiantstationery.com</p> -->
									</li>
								</ul>
							</div>

						</div>
					</div>
					<div class="col-md-2">
					<a href="#" data-toggle="modal" data-target="#enquiry_modal"><button class="btn-new-request" >Business Enquiry</button></a>
					</div>
					
				</div>
				
			</div>
		</div>

		<div class="top-menu navbar-design">
			<div class="container">
				<div class="row">
					
					<div >
					<div class="nav-section">
						<ul id="desktop-nav">
						<li class="active">
							</li>
							<li class="active has-dropdown" id="home-nav">
							<a href="index.php"><img src="images/nav_icon/home_icon.png"/>&nbsp;The Company
							</a>
								<ul class="dropdown sub-category">
									<li><a href="philosophy.php"><img src="images/philosophy.png"/>&nbsp;Our Philosophy</a></li>
									<li><a href="sustainability.php"><img src="images/sustainability.png"/>&nbsp;Sustainability</a></li>
								</ul>

							</li>
							
							<li id="custom-nav"><a href="custom.php"><img src="images/nav_icon/custom_icon.png"/>&nbsp;Customize</a></li>
							<li id="product-nav"><a href="product.php"><img src="images/nav_icon/product_icon.png"/>&nbsp;Products</a></li>
							<li id="contact-nav"><a href="contact.php"><img src="images/nav_icon/contact_icon.png"/>&nbsp;Contact</a></li>
						</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	
</div>

	</div>

	
	
	<!-- jQuery -->

	
	<script src="js/main.js"></script>


	<script type="text/javascript">
	

	

	var x =window.location.href;
    var y = x.split('/');
    var z= y[3]


    if(z=="index.php"){
    	
    	$("#home-nav").addClass("active");
    	$("#custom-nav").removeClass("active");
    	$("#product-nav").removeClass("active");
    	$("#contact-nav").removeClass("active");
    }


    if(z=="custom.php"){
    	
    	$("#custom-nav").addClass("active");
    	$("#home-nav").removeClass("active");
    	$("#product-nav").removeClass("active");
    	$("#contact-nav").removeClass("active");
    }

    if(z=="product.php"){
    	
    	$("#product-nav").addClass("active");
    	$("#custom-nav").removeClass("active");
    	$("#home-nav").removeClass("active");
    	$("#contact-nav").removeClass("active");
    }

     if(z=="contact.php"){
    	
    	$("#contact-nav").addClass("active");
    	$("#product-nav").removeClass("active");
    	$("#home-nav").removeClass("active");
    	$("#custom-nav").removeClass("active");
    }



function submitProductEnquiry(){
  var enquiry_name = document.getElementById('product_enquiry_name').value;
  var enquiry_email = document.getElementById('product_enquiry_email').value;
  var enquiry_phone = document.getElementById('product_enquiry_phone').value;
  var enquiry_message = document.getElementById('product_enquiry_message').value;
  var enquiry_ProductName = "Business Enquiry";
  var enquiry_SiteName = "";

  if(enquiry_name==""){
    alert('Please Enter Your Name');
  }else if(enquiry_email==""){
    alert('Please Enter Your Email');
  }else if(enquiry_phone==""){
    alert('Please Enter Your Phone Number');
  }else{

    $.ajax({
    url:"SendEnquiryEmail.php",
    data:{EnquiryName:enquiry_name,
      EnquiryEmail:enquiry_email,
      EnquiryPhone:enquiry_phone,
      EnquiryMessage:enquiry_message,
      EnquiryProductName:enquiry_ProductName,
      EnquirySiteName:enquiry_SiteName},
    type:'post',
    success:function(response){
      alert(response);
      $('#enquiry_modal').modal('hide');
      
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

