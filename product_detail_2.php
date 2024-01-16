
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

  .card-body p{
    margin-bottom: 10px !important;
  }

  .card-body .notebook-price{
    font-size: 20px;
    font-weight: 700;
    color: #202020;
  }

  .book-title{
    color: #f85a16;
  }

  .card-body hr{
    margin-top: 10px !important;
    margin-bottom: 10px !important;
  }

  .mt-25{
    margin-top: 25px;
  }

  .option-list ul li div{
    cursor: pointer;
  }

  .share-icon{
    font-size: 25px !important;
    background: #f85a16;
    height: 40px;
    color: white;
    position: absolute;
    top: 10px;
    left: 28px;
    width: 40px;
    text-align: center;
    line-height: 40px !important;
    border-radius: 100px;
    cursor: pointer;
  }


  .recommended-area .col-md-3 img{
    width: 100%;
  }

   .recommended-area .col-md-3 .book-box{
   border: 1px solid #e3e2e2;
    border-radius: 3px;
    text-align: center;
  }

  .book-box hr{
        margin-top: 10px;
    margin-bottom: 10px;
    border: 0;
    border-top: 1px solid #eeeeee;
  }

  .recommended-area{
        margin-top: 60px;
        margin-bottom: 60px;
  }

  .recommended-area h2{
      text-transform: uppercase;
          font-weight: 500;
  }

  .name-book{
        font-weight: 600;
  }


  </style>

	</head>
	<body>
		
	<div id="page">
	
<div data-load="header.php"></div>
<div class="container">

  <div class="product-detail-area">
 
<div class="card">
  <div class="row">
    <aside class="col-sm-8 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">

<i class="fa fa-share-alt share-icon"></i>
  <div> <a href="#"><img src="images/img-1.jpg"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="images/img-1.jpg"> </div>
  <div class="item-gallery"> <img src="images/img-2.jpg"> </div>
  <div class="item-gallery"> <img src="images/img-3.jpg"> </div>
  <div class="item-gallery"> <img src="images/img-4.jpg"> </div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
    </aside>
    <aside class="col-sm-4">
<article class="card-body p-5">
 



<div class="book-detail-content">

    <div class="row">
      <div class=" col-md-12 book-title">
        My Notebook
        <div class="notebook-price">&#8377; 40/-</div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
      <label>Color : <span class="color-name">Red</span></label>
       <div class="color-option">
          <ul>
              <li ><a><div class="color-box Red"></div></a></li>
              <li><a><div class="color-box Green"></div></a></li>
              <li><a><div class="color-box Blue"></div></a></li>
              <li><a><div class="color-box Orange"></div></a></li>
              <li><a><div class="color-box Pink"></div></a></li>
          </ul>
        </div>
      </div>
    </div>

   <div class="row">
      <div class="col-md-6">
      <label>Size : <span class="size-name">Pocket</span></label>
      <div class="option-list layout-type size-type">
         <ul >
         <li ><div class="size-box Pocket"><img src="images/sizeP.png"></div></li>
         <li><div class="size-box Large"><img src="images/sizel.png"></div></li>
         <li><div class="size-box Extra-Large" ><img src="images/sizexl.png"></div></li>
            
         </ul>
      </div>
      </div>
       <div class="col-md-6">
      <label>Layout : <span class="layout-name">Ruled</span></label>
      <div class="option-list layout-type layout-click">
         <ul >
            <li><div class="layout-box Ruled"><img src="images/ruled.png"></div></li>
            <li><div class="layout-box Dotted"><img src="images/dot_paper.png"></div></li>
            <li><div class="layout-box Blank"><img src="images/blank_paper.png"></div></li>
         </ul>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
      <label>Cover: <span class="cover-name">Soft-Cover</span></label>
      <div class="option-list layout-type cover-type">
         <ul >
            <li><div class="cover-box Soft-Cover"><img src="images/cover_1.png"></div></li>
            <li><div class="cover-box Hard-Cover"><img src="images/cover_2.png"></div></li>
            
         </ul>
      </div>
      </div>

       
    </div>

    <div class="row" style="display: none;">
      <div class="col-md-6">
       <label>Size</label>
         <select class="form-control">
            <option>Flagship</option>
            <option>Plus</option>
            <option>Pocket</option>
       </select>
      </div>
       <div class="col-md-6">
       <label>Save</label>
         <select class="form-control">
            <option>Single Book</option>
            <option>2 Pack - save 5%</option>
            <option>3 Pack - save 10%</option>
       </select>
      </div>
    </div>

    <hr>

    <div class="row">
      
        <div class="col-md-8">
        <a class="btn btn-primary mt-25">
          Buy Online
        </a>
      </div>
    </div>

    


   

   <!-- row.// -->
</div>




</div> <!-- card.// -->


</div>
</div>

<div class="product-specification">
 

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Product Specification</a></li>
    <li><a data-toggle="tab" href="#menu1">Additional Specification</a></li>
   
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <div class="product-specification-table">
                         <table>
                           <tbody><tr>
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
                         </tbody></table>
                         </div>
    </div>
    <div id="menu1" class="tab-pane fade">
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


<div class="recommended-area">
  
  <div>
  <h2>Recommended</h2>

  <div class="row">
    <div class="col-md-3">
    <div class="book-box">
      <img src="images/Radiant_Web_Banners_Customize_Page.png">

      <hr>
      <div class="name-book">
        Classic Notebook
      </div>
      <div class="price-book">
        &#8377; 40/-
      </div>
    </div>
    </div>

    <div class="col-md-3">
     <div class="book-box">
      <img src="images/customize_banner_5.png">
       <hr>
      <div class="name-book">
        Classic Notebook
      </div>
      <div class="price-book">
        &#8377; 40/-
      </div>
      </div>
    </div>
     <div class="col-md-3">
      <div class="book-box">
      <img src="images/customize_banner_6.png">
       <hr>
      <div class="name-book">
        Classic Notebook
      </div>
      <div class="price-book">
        &#8377; 40/-
      </div>
      </div>
    </div>
      <div class="col-md-3">
       <div class="book-box">
      <img src="images/customize_banner_7.png">
       <hr>
      <div class="name-book">
        Classic Notebook
      </div>
      <div class="price-book">
        &#8377; 40/-
      </div>
      </div>
    </div>
  </div>
  


  </div>
</div>

<!--container.//-->

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

 <script type="text/javascript">
    $('.color-option li div').click(function(){
      
        var getColorClass=$(this).attr('class');
        var classSplit=getColorClass.split(' ');
        var secondClassName=(classSplit[1]);
        $('.color-name').html(secondClassName);
    });


 </script>


 <script type="text/javascript">
    $('.size-type li div').click(function(){
        
        var getSizeClass=$(this).attr('class');
        var classSplit=getSizeClass.split(' ');
        var secondClassName=(classSplit[1]);
        $('.size-name').html(secondClassName);
    });

 </script>

 <script type="text/javascript">
    $('.layout-click li div').click(function(){
        
        var getLayoutClass=$(this).attr('class');
        var classSplit=getLayoutClass.split(' ');
        var secondClassName=(classSplit[1]);
        $('.layout-name').html(secondClassName);
    });

 </script>


  <script type="text/javascript">
    $('.cover-type li div').click(function(){
        
        var getCoverClass=$(this).attr('class');
        var classSplit=getCoverClass.split(' ');
        var secondClassName=(classSplit[1]);
        $('.cover-name').html(secondClassName);
    });

 </script>


	</body>
</html>

