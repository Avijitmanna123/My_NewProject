<?php
//session_start();
//@$PName=$_POST['Pname']; 
// @$PPrice=$_POST['Pprice'];
//  @$PQuntity=$_POST['quntity'];
//if (isset($_POST['submitcart'])){ 
// @$check_item=array_column($_SESSION['mycart'],'productname');
//  if(in_array($PName ,$check_item)){
//    echo "
//    <script>   
//    alert('Product Alredy insert in cart');
//    window.location.href ='index1.php';
//    </script>
//    ";
//   }
// else{  
//     
//    $_SESSION['mycart'] = array('productname'=>$PName,'productprice'=>$PPrice,'productquntity'=>$PQuntity );
//    header("location:viewcart.php");
//  }
//}
 ////remove item....................
 // if(isset($_POST['deletebtn'])){
 //    foreach($_SESSION['mycart'] as $key=>$value){
 //       if($value['productname']===$_POST['item']){
 //          unset($_SESSION['mycart'][$key]);
 //          $_SESSION['mycart']=array_values($_SESSION['mycart']);
 //          header('loation:viewcart.php');
 //         }
 //    }
 // }  
//

//
//



  // add to cart new code........................
  session_start();
  @$product_name=$_POST['PNAME'];
  $product_prrice=$_POST['Pprice'];
  $product_quntity=$_POST['quntity'];
  if(isset($_POST['submitcart'])){
   $check_items= array_column( $_SESSION['mycart'],'productname');
    if(in_array($product_name, $check_items)){
     echo "
       <script>   
       alert('Product Alredy insert in cart');
       window.location.href ='index1.php';
       </script>
       ";
    }

     else{
   $_SESSION['mycart'][]=array('productname'=>$product_name,    
                           'productprice'=> $product_prrice,
                           'productquntity'=>$product_quntity);   
                      header("location:viewcart.php");
     }
 }
  // end code ADD TO Cart.........

  ////remove item....................
      if(isset($_POST['deletebtn'])){
         foreach($_SESSION['mycart'] as $key=>$value){
            if($value['productname']===$_POST['item']){
               unset($_SESSION['mycart'][$key]);
               $_SESSION['mycart']=array_values($_SESSION['mycart']);
               header('location:viewcart.php');
              }
         }
      } 
    
       // // Update Product......
      
      if(isset($_POST['updatebtn'])){
       foreach($_SESSION['mycart'] as $key=>$value){
          if($value['productname'] === $_POST['item']){
              $_SESSION['mycart'][$key]=array('productname'=>$product_name,    
                                               'productprice'=> $product_prrice,
                                               'productquntity'=>$product_quntity);   
                                                    header("location:viewcart.php");
 }
            }
       }

?>
