<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> web home page</title>
       
   
      
    <?php 
     include "Header.php";
    ?>
</head> 
<body style="background-color:gray">
<div class="ccontainer-fluid">
    <div class="col-md-12">
    <div class="row">  
  
<!--  slide scraling photo  -->
 <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner"  style="height:300px">
          <div class="carousel-item active">
            <img src="slide2.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image phone slide.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="446c3bb3405b406b.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

<!-- END Slide-->

 <?php
 include "config.php" ;
 $Data=mysqli_query($Con,"SELECT * FROM `datatable`" );
 while($row=mysqli_fetch_array($Data)){
 $check_page=$row['Producct_Catagory'];
 if($check_page==='Home'){

echo"
<div class='col-md-3 col-lg-3' m-auto mb-3 my-5>
 <form action='insertcart.php' method='POST'>
<div class='card m-auto my-3' style='width: 20rem;'>
  <img src='../admin/product/$row[Product_Image]'class='card-img-top'style=' height:150px'>
  <div class='card-body text-center'>
    <h5 class='card-title text-primary fs-4 '>$row[Product_Name]</h5>
    <p class='card-text   text-secondary fs-4 '>RS:- $row[Produt_Price],00</p>
    <input type='hidden' name='PNAME' value = '$row[Product_Name]'>
    <input type='hidden' name='Pprice' value =' $row[Produt_Price]'>
    <input type='number' name='quntity' value= 'min='1' max='20'' placeholder='Quntity'><br><br>
    <input type='submit'Name='submitcart' class='btn btn-danger text-white w-100' value='Add To Cart'><br><br> 
    <a href='#'class=''>See More</a>
  </div>
</div>
</form>
</div>
";
}
}
?>
</div>
</div>
</div>
<?php
include 'footer.php';
?>

</body>
</html>