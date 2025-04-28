<?php

include 'config.php';
if (isset($_POST['Submit'])){
 $Product_Name=$_POST['Pname'];
 $Product_Price=$_POST['Pprice'];
 $Product_Image=$_FILES['Pimage'];
 $Image_loc=$_FILES['Pimage']['tmp_name'];
 $Image_Name=$_FILES['Pimage']['name'];
 $image_destination="Uploadeimage/". $Image_Name;
  move_uploaded_file($Image_loc ,"Uploadeimage/". $Image_Name);
  $Product_cat=$_POST['Ppage'];
  

}
     //INSER DATA IN DATABASE.......

       //mysqli_q
      
       mysqli_query($Con,"INSERT INTO `datatable`( `Product_Name`, `Produt_Price`, `Product_Image`, `Producct_Catagory`) 
       VALUES ('$Product_Name','$Product_Price','$image_destination','$Product_cat')");
        header("location:index.php");
?>