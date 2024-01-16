<?php
ini_set('date.timezone', 'Asia/Kolkata');

require 'dbconfig.php';

$pages=$_POST["Pages"];
$db=db_connect();       

$str = "";
$sql="";

if($pages!=""){
  $arr = split (",", $pages);

  if(sizeof($arr)>0){
        for ($i=0; $i < sizeof($arr)-1 ; $i++) { 
            $str = $str . "ProductPages ='". $arr[$i]."' OR ";
        }
        $str = substr($str, 0, -4);

        $sql = "SELECT Id,ProductName,ProductCategory,ProductSubCategory,ProductSize,ProductPrice,ProductPages,ProductFeatures,ProductImage,ProductLayout,Product_Id_QR_Code,FlipkartLink,AmazonLink FROM `ProductDetails` WHERE `DeleteStatus`=0 &&  ($str) ORDER BY `Id` DESC";
    }  
}


else{
    $sql = "SELECT Id,ProductName,ProductCategory,ProductSubCategory,ProductSize,ProductPrice,ProductPages,ProductFeatures,ProductImage,ProductLayout,Product_Id_QR_Code,FlipkartLink,AmazonLink FROM `ProductDetails` WHERE `DeleteStatus`=0 ORDER BY `Id` DESC";
}



 
 $exe = $db->query($sql);
 $data = $exe->fetch_all(MYSQLI_ASSOC);

//echo json_encode($data);


$str2 ="";

foreach($data as $k2 => $v2){

    $flipkart = "'".$v2['FlipkartLink']."','".$v2['ProductName']."'";
    $amazon ="'".$v2['AmazonLink']."','".$v2['ProductName']."'";

$str2 = $str2.
                    '<div class="col-md-4">
                     <div class="hovereffect">
                    <div class="item-box" >

            <center><img src="http://admin.radiantstationery.com/'.$v2['ProductImage'].'" style="width:150px;height:150px;"/></center>
                         
                         <div class="name-price-area">'

                            .$v2['ProductName'].'

                            <div class="book-price"><i class="fa fa-inr"></i>&nbsp;'.$v2['ProductPrice'].'</div>
                         </div>
                        <div class="item-box-footer">
                             <div class="row">
                                 <div class="col-md-7">
                                     <b>Size : </b>'.$v2['ProductSize'].'
                                 </div>
                                 <div class="col-md-5 ">
                                     <div class="pull-right"><b>Pages :</b>'.$v2['ProductPages'].'</div>
                                 </div>
                             </div>
                         </div>
                    </div>

                    <div class="overlay" >
                       <div class="btn-area">
                       <a class="info" onclick="openAmazon('.$amazon.')"><img src="images/amazon.png" class="mt-0" /></a>

                       <a class="info" onclick="openFlipkart('.$flipkart.')"><img src="images/flipkart.png" class="mt-0" /></a>
                       </div>
                    </div>

                    </div>
                    </div>';
 } 


echo $str2;

?>