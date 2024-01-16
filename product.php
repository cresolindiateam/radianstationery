 <?php
ini_set('date.timezone', 'Asia/Kolkata');

require 'dbconfig.php';


$db=db_connect();

  $sql = "SELECT Id,ProductName,ProductCategory,ProductSubCategory,ProductSize,ProductPrice,ProductPages,ProductFeatures,ProductImage,ProductLayout,Product_Id_QR_Code,FlipkartLink,AmazonLink FROM `ProductDetails` WHERE `DeleteStatus`=0 ORDER BY `Id` DESC";

  $exe = $db->query($sql);
  $data = $exe->fetch_all(MYSQLI_ASSOC);


  $sqlSize = "SELECT Id,SizeName FROM `ProductSize`";
  $exeSize = $db->query($sqlSize);
  $dataProductSize = $exeSize->fetch_all(MYSQLI_ASSOC);


  $sqlPage = "SELECT Id,PageName FROM `ProductPages`";
  $exePage = $db->query($sqlPage);
  $dataProductPage = $exePage->fetch_all(MYSQLI_ASSOC);




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
     

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap-treeview.min.css">

     <link rel="stylesheet" href="css/jquery-simpleTreeMenu.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  

	</head>
	<body>
		
	
	
	<div id="page">


	
<div data-load="header.php"></div>


	<div class="container">



  <div class="modal fade" id="your_requirnment" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <img src="images/requirnment.png"/>
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
  



    <div class="row">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item active">Product</li>
  
</ol>
</div>
</div>
    <div class="container">
    	
    	<div class="row products-area">
    		<div class="col-md-3 filter-area">

        <div class="filters">
        <ul id="demoTree">
            
            <li>
                <span class="stm-icon"></span>
                <span class="stm-content">Notebook-1</span>
                <ul>
                   
                    <li>
                        <span class="stm-icon"></span>
                        <a class="stm-content">Sub-Notebook</a>
                        <ul>
                            <li>
                                <span class="stm-icon"></span>
                                <a class="stm-content" >Sub-Sub-Notebook</a>
                            </li>
                            <li>
                                <span class="stm-icon"></span>
                                <a class="stm-content" >Sub-Sub-Notebook</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
           

            <li>
                <span class="stm-icon"></span>
                <span class="stm-content">Notebook-2</span>
                <ul>
                   
                    <li>
                        <span class="stm-icon"></span>
                        <a class="stm-content">Sub-Notebook</a>
                        <ul>
                            <li>
                                <span class="stm-icon"></span>
                                <a class="stm-content" >Sub-Sub-Notebook</a>
                            </li>
                            <li>
                                <span class="stm-icon"></span>
                                <a class="stm-content" >Sub-Sub-Notebook</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </li>

             <li>
                <span class="stm-icon"></span>
                <span class="stm-content">Notebook-3</span>
                <ul>
                   
                    <li>
                        <span class="stm-icon"></span>
                        <a class="stm-content">Sub-Notebook</a>
                        <ul>
                            <li>
                                <span class="stm-icon"></span>
                                <a class="stm-content" >Sub-Sub-Notebook</a>
                            </li>
                            <li>
                                <span class="stm-icon"></span>
                                <a class="stm-content" >Sub-Sub-Notebook</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </li>
        </ul>
        </div>
    		<div class="filters" style="display:none">
    			<div class="filter-heading"><i class="fa fa-list-ul"></i>&nbsp;Categories</div>

    			<div id="tree"></div>
          
    			<div class="filter-heading"><i class="fa fa-arrows-alt"></i>&nbsp;Size</div>
    			<ul>

          <?php foreach($dataProductSize as $k2 => $v2){?>

            <li><label class="checkbox-container">&nbsp;<?php echo $v2['SizeName'];?><input type="checkbox" value="<?php echo $v2['SizeName'];?>" id="<?php echo $v2['SizeName'];?>" name="size_checkbox" class="size_checkbox_click"><span class="checkmark"></span></label></li>

            <?php } ?>  	

    			</ul>


    			<div class="filter-heading"><i class="fa fa-file-text"></i>&nbsp;Pages</div>

    			<ul>

          


          <?php foreach($dataProductPage as $k2 => $v2){?>

            <li><label class="checkbox-container">&nbsp;<?php echo $v2['PageName'];?><input type="checkbox" value="<?php echo $v2['PageName'];?>" id="<?php echo $v2['PageName'];?>" name="page_checkbox" class="page_checkbox_click"><span class="checkmark"></span></label></li>

            <?php } ?> 

    			</ul>
    			
    		</div>

    		</div>

    		<div class="col-md-9 products-area">
    		<div class="sell-items">

    			<div class="row" id="products_item_div">



<?php foreach($data as $k2 => $v2){?>

    				<div class="col-md-4">
                     <div class="hovereffect">
    				<div class="item-box" >

            <center><img src="<?php echo "http://admin.radiantstationery.com/".$v2['ProductImage'];?>" style="width:150px;height:150px;"/></center>
    					 
    					 <div class="name-price-area">

    					 	<?php echo $v2['ProductName'];?>

    					 	<div class="book-price"><i class="fa fa-inr"></i>&nbsp;<?php echo $v2['ProductPrice'];?></div>
    					 </div>
                        <div class="item-box-footer">
                             <div class="row">
                                 <div class="col-md-7">
                                     <b>Size : </b><?php echo $v2['ProductSize'];?>
                                 </div>
                                 <div class="col-md-5 ">
                                     <div class="pull-right"><b>Pages :</b> <?php echo $v2['ProductPages'];?></div>
                                 </div>
                             </div>
                         </div>
    				</div>

                    <div class="overlay" >
                       <div class="btn-area">
                       <a class="info" onclick="openAmazon('<?php echo $v2['AmazonLink'];?>','<?php echo $v2['ProductName'];?>')"><img src="images/amazon.png" class="mt-0" /></a>

                       <a class="info" onclick="openFlipkart('<?php echo $v2['FlipkartLink'];?>','<?php echo $v2['ProductName'];?>')"><img src="images/flipkart.png" class="mt-0" /></a>
                       </div>
                    </div>

                    </div>
    				</div>
<?php } ?>


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

	<script src="js/bootstrap-treeview.min.js"></script>

  <script src="js/jquery-simpleTreeMenu.js"></script>



   
       
<script type="text/javascript">
  var mytree = [
  {
    text: "Notebook-1",
    nodes: [
      {
        text: "Sub Notebook-1",
        
      },
      {
        text: "Sub Notebook-2"
      }
    ]
  },
  {
    text: "Notebook-2"
  },
  {
    text: "Notebook-3"
  },
  {
    text: "Notebook-4"
  },
  {
    text: "Notebook-5"
  }
];

$('#tree').treeview({data: mytree});




function openFlipkart(link, productName) {

  //alert(productName);
  document.getElementById("product_enquiry_ProductName").value=productName;
  document.getElementById("product_enquiry_siteName").value="Flipkart";

  if(link==""){
      $("#your_requirnment").modal();
  }else{
    window.location.href = link;
  }

}

function openAmazon(link,productName) {

  document.getElementById("product_enquiry_ProductName").value=productName;
  document.getElementById("product_enquiry_siteName").value="Amazon";

  if(link==""){
      $("#your_requirnment").modal();
  }else{
    window.location.href = link;
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
      $('#your_requirnment').modal('hide');
      
    },
    error: function(xhr, status, error) {
      var err = eval("(" + xhr.responseText + ")");
      alert(err.Message);
    }

   });

  }
}


   </script>

   <script type="text/javascript">
$(function(){
    $("[data-load]").each(function(){
        $(this).load($(this).data("load"), function(){
        });
    });
})


$(".size_checkbox_click").click(function(){
    var sizes='';
    $('input:checkbox[name=size_checkbox]').each(function(){    
      if($(this).is(':checked')){ 
          sizes+= $(this).val()+',';
      }
    });

  
    $.ajax({
    url:"AjaxFilterProductSizes.php",
    data:{Sizes:sizes},
    type:'post',
    //dataType: 'json',
    success:function(response){
      //alert(response);
      $("#products_item_div").html("");
      $("#products_item_div").append(response);
      // for (var i = 0; i < response.length ; i++) {
      //     var obj = response[i];
      //     console.log(obj);

      //     products_item_div

      // }
      console.log(response);
      
    },
    error: function(xhr, status, error) {
      var err = eval("(" + xhr.responseText + ")");
      alert(err.Message);
    }

   }); 
});


$(".page_checkbox_click").click(function(){
    var pages='';
    $('input:checkbox[name=page_checkbox]').each(function(){    
      if($(this).is(':checked')){ 
          pages+= $(this).val()+',';
      }
    });


  
    $.ajax({
    url:"AjaxFilterProductPages.php",
    data:{Pages:pages},
    type:'post',
    //dataType: 'json',
    success:function(response){
      //alert(response);
      $("#products_item_div").html("");
      $("#products_item_div").append(response);
      // for (var i = 0; i < response.length ; i++) {
      //     var obj = response[i];
      //     console.log(obj);

      //     products_item_div

      // }
      console.log(response);
      
    },
    error: function(xhr, status, error) {
      var err = eval("(" + xhr.responseText + ")");
      alert(err.Message);
    }

   }); 
});
</script>

<script type="text/javascript">
    $('#demoTree').simpleTreeMenu();
</script>


	</body>
</html>

