<?php
ini_set('date.timezone', 'Asia/Kolkata');

require 'dbconfig.php';

$db = db_connect();

$productId=$_REQUEST['ProductId'];


$sql = "SELECT Id,FeatureName,FeatureDetail,FeatureImage,Created_At FROM `ProductFeatures` WHERE `ProductId`=$productId && `DeleteStatus`=0 ORDER BY `Created_At` ASC";
    $exe = $db->query($sql);
    $data = $exe->fetch_all(MYSQLI_ASSOC);
    //print_r($data);


    $sql1 = "SELECT ProductName,FlipkartLink,AmazonLink FROM `ProductDetails` WHERE `Id`=$productId";
    $exe1 = $db->query($sql1);
    $data1 = $exe1->fetch_all(MYSQLI_ASSOC);

    $flipkart_link = $data1[0]['FlipkartLink'];
    $amazon_link = $data1[0]['AmazonLink'];
    $product_name = stripslashes(utf8_decode($data1[0]['ProductName']));

    

    

?>



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
     <style type="text/css">
     	.js-fh5co-nav-toggle{
     		display: none;
     	}
     </style>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

	<div class="container">
  <div class="modal fade" id="your_requirnment" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <img src="images/enquiry_icon.png"/>
          <h4>--- Your Requirment ---</h4>
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
            <center><button class="btn btn-orange" onclick="submitProductEnquiry();">Send</button></center>
            </div>
         
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>

<div class="shopping-option" style="display: none;" >
		<ul>
			<li><a  onClick="openAmazon();"><img src="images/amazon.png" ></a></li>
			<li><a  onClick="openFlipkart();"><img src="images/flipkart.png" ></a></li>
		</ul>
	</div>
	<nav class="fh5co-nav scan-page-header" role="navigation" >
		
		<div class="row">
			<div class="col-md-1">
				<a href="http://radiantstationery.com/"><img src="images/scan_book_icons/home_icon.png"></a>
			</div>
			<div class="col-md-10">
				<h2><?php echo stripslashes(utf8_decode($data1[0]['ProductName']));?></h2>
			</div>
			<div class="col-md-1">
				<a class="cart-icon"><img src="images/scan_book_icons/shopping_icon.png"></a>
			</div>
		</div>

		
	</nav>

<div class="container">
<div class="book-features">
	<div class="row">


<?php foreach($data as $k2 => $v2){?>
                         
                      

		<div class="col-md-4">
			<div class="book-feature-box">
				<img src="<?php echo "http://admin.radiantstationery.com/".$v2['FeatureImage'];?>"/>
				<h3><?php echo stripslashes(utf8_decode($v2['FeatureName']));?></h3>
				<hr>
				<p><?php echo stripslashes(utf8_decode($v2['FeatureDetail']));?></p>
			</div>
		</div>

		<?php } ?>


		

	</div>
</div>
</div>	


<?php if (empty($data)) { ?>
        <div id="no_feature_text">
         <img src="images/sad.png">
			<h1>There is no Feature available for this product.</h1>
		</div>
    <?php } ?>

<div>
	
</div>
	

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
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

		<script type="text/javascript">
		
	   $(".cart-icon").click(function(){
       $(".shopping-option").toggle();

	   });



function openFlipkart(){

	var product_name1 = "<?php echo $product_name ?>";
	document.getElementById("product_enquiry_ProductName").value=product_name1;
	document.getElementById("product_enquiry_siteName").value="Flipkart";

	
	var flipkart = "<?php echo $flipkart_link ?>";

	if(flipkart==""){
      $("#your_requirnment").modal();
  	}else{
    	window.location.href = flipkart;
  	}

	
}

function openAmazon(){
	var product_name1 = "<?php echo $product_name ?>";
	document.getElementById("product_enquiry_ProductName").value=product_name1;
	document.getElementById("product_enquiry_siteName").value="Amazon";

	
	var amazon = "<?php echo $amazon_link ?>";


	if(amazon==""){
      $("#your_requirnment").modal();
  	}else{
    		window.location.href = amazon;
  	}
}

function submitProductEnquiry(){

	var enquiry_name = document.getElementById('product_enquiry_name').value;
  var enquiry_email = document.getElementById('product_enquiry_email').value;
  var enquiry_phone = document.getElementById('product_enquiry_phone').value;
  var enquiry_message = document.getElementById('product_enquiry_message').value;
  var enquiry_ProductName = document.getElementById('product_enquiry_ProductName').value;
  var enquiry_SiteName = document.getElementById('product_enquiry_siteName').value;
  

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
      window.location.reload();
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

