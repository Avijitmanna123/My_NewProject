<?php
 //ADD TO CART USING TO COOKIES ..........
 session_start();
 if(isset($_SESSION['user'])){
 @$PName=$_POST['PNAME']; 
 @$PPrice=$_POST['Pprice'];
 @$PQuntity=$_POST['quntity'];
 if(isset($_POST['submitcart'])){
 if(isset($_COOKIE['cart']))
 {
  $cookie_data = stripslashes($_COOKIE['cart']);
 
  $cart_data = json_decode($cookie_data, true);
 }
 else
 {
  $cart_data = array();
 }
  
 $item_id_list = array_column($cart_data, 'productname');
 
 if(in_array($PName, $item_id_list))
 {
   // foreach($cart_data as $keys => $values) 
   // {  
   //    if($cart_data[$keys]['productname'] == $_POST["PNAME"]) 
   //      { 
   //            $cart_data[$keys]['productquntity'] = $cart_data[$keys]['productquntity'] + $_POST["quntity"]; 
   //           }  
   //         } 
     echo "
     <script>   
     alert('Product Alredy insert in cart');
     window.location.href ='index1.php';
     </script>
     ";
 }
     
     else{
   $item_arr=array('productname'=>$PName,    
                  'productprice'=> $PPrice,
                  'productquntity'=>$PQuntity);    
               $cart_data[]=$item_arr;
               $item_data=json_encode($cart_data);
               setcookie('cart',$item_data,time()+ (86400*30));
              header("location:viewcart.php"); 
    }
  
   }
   //END  CODE ADD TO CART..............
 
    // ITEM DELETE IN THE CART.......
 
   if(isset($_POST['deletebtn'])){
     $cookie_data = stripslashes($_COOKIE['cart']);
     $cart_data = json_decode($cookie_data, true);
     foreach($cart_data as $keys => $values)
     {
      if($cart_data[$keys]['productname'] == $_POST['item'])
      {
        unset($cart_data[$keys]);
        $item_data = json_encode($cart_data);
        setcookie('cart', $item_data, time() + (86400 * 30));
         header("location:viewcart.php");
      }
   
  }
 }
 
 //ITEM UPDATE IN THE CART.................
 
 if(isset($_POST['updatebtn'])){
   $cookie_data = stripslashes($_COOKIE['cart']);
   $cart_data = json_decode($cookie_data, true);
   foreach($cart_data as $keys => $values) {
      if($cart_data[$keys]['productname'] == $_POST["item"]) 
         { 
       $item_arr=array('productname'=>$PName,    
       'productprice'=> $PPrice,
       'productquntity'=>$PQuntity);    
       $cart_data[$keys]=$item_arr;
       
       $item_data=json_encode($cart_data);
       setcookie('cart',$item_data,time()+ (86400*30));
       header("location:viewcart.php"); 
  
         }
      }
 }
 
 }else{
   header("location:FORM/login.php");
 }



//   ADD TO CART USING TO SESSION VARIABLE................................ 
//  // add to cart new code........................
//
//  session_start();
//
//  $product_name=$_POST['PNAME'];
//  $product_prrice=$_POST['Pprice'];
//  $product_quntity=$_POST['quntity'];
//if(isset($_POST['submitcart'])){
//  $check_items= array_column($_SESSION['mycart'],'productname');
//if(in_array($product_name, $check_items)){
// echo "  
// <script>   
//   alert('Product Alredy insert in cart');  window.location.href ='index1.php'; 
//  </script>  ";
//}
//else{
// $_SESSION['mycart'][]=array('productname'=>$product_name,
//                               'productprice'=>$product_prrice,
//                              'productquntity'=>$product_quntity);
//                      //  print_r( $_SESSION['mycart']);
//                             
//                                header("location:viewcart.php");
//}
//}
//
// // end code ADD TO Cart.........
// ////remove item....................
//     if(isset($_POST['deletebtn'])){
//        foreach($_SESSION['mycart'] as $key=>$value){
//           if($value['productname']===$_POST['item']){
//              unset($_SESSION['mycart'][$key]);
//              $_SESSION['mycart']=array_values($_SESSION['mycart']);
//              header('location:viewcart.php');
//             }
//        }
//     } 
//   
//      // // Update Product......
//      
//     if(isset($_POST['updatebtn'])){
//      foreach($_SESSION['mycart'] as $key=>$value){
//         if($value['productname'] === $_POST['item']){
//             $_SESSION['mycart'][$key]=array('productname'=>$product_name,    
//                                              'productprice'=> $product_prrice,
//                                              'productquntity'=>$product_quntity);   
//                                                   header("location:viewcart.php");
//}
//           }
//      }
//    //} check login user
//    //else{
//    //  header("location:FORM/login.php");
//    //}

 
?>