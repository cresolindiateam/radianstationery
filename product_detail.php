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
 
  <style type="text/css">

  .product-detail{
    margin-top: 40px;
        margin-bottom: 80px;
  }
    
   .product-detail-section h2{
    font-weight: 600;
    text-align: center;
   }

   
   .color-option ul{
    list-style: none;
    padding-left: 0px;
   }

   .color-option ul li{
    float: left;
    padding-right: 20px
   }

   .color-box {
    height: 30px;
    width: 40px;
    border-radius: 2px;
   }

   .red {
    background: red;
   }

   .blue {
    background: blue;
   }

   .green {
    background: green;
   }

   .orange {
    background: orange;
   }

   .black {
    background: black;
   }

    .gray {
    background: gray;
   }

   .yellow {
    background: yellow;
   }

   .box-normal{
    background: #e8e8e8;
    border: 1px solid #d0cfcf;
    border-radius: 3px;
   }

   .product-detail .product-img{
      border: 1px solid #f0f0f0;
      padding: 20px;
   }

   .product-detail .product-img img{
      width: 90%;
      margin-left: 5%;
      margin-right: 5%;
   }

   .product-detail h2{
    font-size: 17px;
    border-bottom: 1px solid #f0f0f0;
    padding: 15px;
    font-weight: 500;
    border-radius: 2px;
    margin-bottom: 0px;
    background: #f9f9f9;
   }


   .book-detail-box {
    border: 1px solid #f0f0f0;
   }

    .book-detail-box:first-child {
        margin-top: 0px;
   }

   .book-detail-box{
    margin-top: 10px;
   }

   .book-detail-content {
    padding: 10px;
   }


   .book-detail-content .col-md-6{
    margin-bottom: 20px;
   }

     .book-detail-content .col-md-12{
    margin-bottom: 20px;
   }



   .book-detail-content label{
      font-weight: 500 !important;
      margin-bottom: 0px;
   }


   .option-list ul{
      list-style: none;
      padding-left: 0px;
      margin-bottom: 0px;
   }

   .option-list ul li{
     float: left;
     padding-right: 10px;
     color: black;
     font-weight: 500;
   }

   .layout-type{
    margin-top: 10px;
   }

   .layout-type ul li{
      background: #f9f6db;
      padding: 10px;
      border-radius: 2px;
      border: 1px solid #e0dcbb;
      margin-right: 10px;
   }

   .leave-img{
    width: 7%;
   }

   .product-specification-table table{
     width: 100%;
   }

    .product-specification-table table tr td:last-child{
      color: #202020;
      font-weight: 500;
   }

    .product-specification-table table td{
     width: 40%;
   }
    


    .additional_specification_list{
     list-style: none;
     padding-left: 0px;
     font-size: 14px;
     width:50%;
   }

   .additional_specification_list i{
      color: #49a010;
      padding-right: 5px;
   }

   .additional_specification_list li:nth-child(even){
        background: #ddedf5;
    padding: 5px;
    color: black;
    font-weight: 500;
    margin-bottom: 5px;
   }

   .additional_specification_list li:nth-child(odd){
        background: #eaf3f7;
    padding: 5px;
    color: black;
    font-weight: 500;
    margin-bottom: 5px;
   }

   .ratings-star{
    display: inline;
    margin-left: 10px;
   }

   .ratings-star i{
     color: #fec104 ;
   }

   .ratings-star .unfil{
     color: #9ba9af !important;
   }

   .left-detail-part{
    overflow-y: scroll;
    height: 500px;
    overflow-x: hidden;
   }






     
       

/*ram*/

  </style>

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
  <li class="breadcrumb-item active"><a href="product.php">Product</a></li>
  <li class="breadcrumb-item active">Product Detail</li>
  
</ol>
</div>
</div>
    
    <div class="container">
      
     

     <div class="product-detail">
      <div class="row">
        <div class="col-md-5">
        <div class='product-img'>
          <img src="images/book-2.png">
          </div>
        </div>

        <div class="col-md-7">
        <div class="left-detail-part">
            <div class="book-detail-box">
                <h2>Book Detail</h2>
                    <div class="book-detail-content">
                       <div class="row">
                         <div class="col-md-6">
                           <label>Color Options</label>
                            <div class="color-option">
                               <ul>
                               <li><div class="color-box red"></div></li>
                               <li><div class="color-box green"></div></li>
                               <li><div class="color-box blue"></div></li>
                               <li><div class="color-box orange"></div></li>
                               
                             </ul>
                            </div>
                         </div>

                          
                         <div class="col-md-6">
                          <label>Ruling</label>
                          <div class="option-list">
                             <ul>
                               <li>Option-1</li>
                               <li>Option-2</li>
                               <li>Option-3</li>
                             </ul>
                          </div>
                          
                         </div>

                         <div class="col-md-12">
                           <label><img src="images/leave_icon.png" class="leave-img"/>Enviroment Friendly:- All available in </label>
                            <div class="option-list layout-type">
                             <ul>
                               <li>ECF</li>
                               <li>ECO Paper</li>
                               <li>High Quality Paper</li>
                               <li>A5</li>
                               <li>B5</li>
                             </ul>
                          </div>
                         </div>

                        <div class="col-md-12">
                         <label>Buy Online</label>
                            <div class="option-list ">
                             <ul>
                               <li>F</li>
                               <li>A</li>
                              
                             </ul>
                          </div>
                        </div>

                       </div> 


                    </div>
            </div>

               

            <div class="book-detail-box">
                <h2>Product Specification</h2>
                    <div class="book-detail-content">
                         <div class="product-specification-table">
                         <table>
                           <tr>
                             <td>Product Code:-</td>
                             <td>: 15XX182</td>
                           </tr>
                            <tr>
                             <td>Type:-</td>
                             <td>: Notebook</td>
                           </tr>
                             <tr>
                             <td>Size:-</td>
                             <td>: A5</td>
                           </tr>

                            <tr>
                             <td>Paper Density:-</td>
                             <td>: 5</td>
                           </tr>

                           <tr>
                             <td>Paper Color:-</td>
                             <td>: White</td>
                           </tr>

                           <tr>
                             <td>Pages:-</td>
                             <td>: 150</td>
                           </tr>

                            <tr>
                             <td>No of Pieces:-</td>
                             <td>: 3</td>
                           </tr>

                            <tr>
                             <td>Ruling-</td>
                             <td>: 40/kg</td>
                           </tr>
                         </table>
                         </div>
                       </div> 


                    </div>


                    <div class="book-detail-box">
                <h2>Additional Specification</h2>
                    <div class="book-detail-content">
                      <ul class="additional_specification_list">
                        <li><i class="fa fa-check-circle"></i>Utility Pocket</li>
                        <li><i class="fa fa-check-circle"></i>Pen holder on the back </li>
                        <li><i class="fa fa-check-circle"></i>Snag free tuin binding</li>
                        <li><i class="fa fa-check-circle"></i>Smooth rounded corner</li>
                        <li><i class="fa fa-check-circle"></i>Yearly Planner</li>
                        <li><i class="fa fa-check-circle"></i>Measuring Scale</li>
                        <li><i class="fa fa-check-circle"></i>Ratings
                           <div class="ratings-star">
                           <i class="fa fa-star "></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star unfil"></i>
                           <i class="fa fa-star unfil"></i>
                           </div>
                        </li>
                      </ul>
                    </div> 


                    </div>
                    </div>
            </div>






        </div>
      </div>
      </div> 







<!--  sita -->

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

