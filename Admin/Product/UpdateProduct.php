<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produt update</title>
    <link rel="stylesheet"href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
</head>
     
<body style="background-color: greenyellow;">
<?php
   $id=$_GET['PID'];
   include 'Config.php' ;
    $record1=mysqli_query($Con,"SELECT * FROM `datatable` WHERE ID=$id ");
    $data= mysqli_fetch_array($record1);
?>
  <div class="conctainer">
   <div class="row">
 <div class=" col-md-4 m-auto border border-primary mt-5 bg-danger">
      
      <form action="" method="post" enctype="multipart/form-data">
      <h3 class="text-center text-danger"><u><i>PRODUCT UPDATE</i></u></h3> <br>
      <div class="mb-3">
       <label class="form-label"> Product Name :</label>
       <input type="text" value="<?php echo $data['Product_Name']?>" name="Pname" class="form-control " placeholder="Enter Your Product Name " required>
      </div>
      <div class="mb-3">
       <label class="form-label"> Product price :</label>
       <input type="text" value="<?php echo $data['Produt_Price']?>" name="Pprice" class="form-control " placeholder="Enter Your Product Price " required>
      </div>
      <div class="mb-3">
       <label class="form-label"> Product Image :</label>
       <input type="File" name="Pimage" class="form-control " placeholder="Choose Your Product Image " required>
       <img src="<?php echo $data['Product_Image']?>"  style="height:100px">
      </div>
      <div class="mb-3">
       <label class="form-label"> Select Page Catagory :</label>
       <select class="form-select"  value="<?php echo $data['Producct_Catagory']?>" name="Ppage" aria-label="Default select example" required>
             <option selected>Open this select menu</option>
             <option value="Home" >Home</option>
             <option value="Phone">Phone</option>
             <option value="Bag">Bag</option>
             <option value="Laptop">Laptop</option>
        </select>
     
      </div>
      <input type="hidden" name="id" value="<?php  echo $data['ID']?>">
      <div class="mb-3"></div>
        <button  name="update" class="submit bg-warning text-white form-control my-3">UPDATE</button>
      </div>
      </form>
 </div>
 </div>
 </div>
  <BR><BR>

   <!-- Php update ccode--> 
    <?php 
     if(isset($_POST['update'])){
        @$id=$_POST['id'];
        //if (isset($_POST['Submit'])){
         $Product_Name=$_POST['Pname'];
         $Product_Price=$_POST['Pprice'];
         $Product_Image=$_FILES['Pimage'];
         $Image_loc=$_FILES['Pimage']['tmp_name'];
         $Image_Name=$_FILES['Pimage']['name'];
         $image_destination="Uploadeimage/". $Image_Name;
          move_uploaded_file($Image_loc ,"Uploadeimage/". $Image_Name);
          $Product_cat=$_POST['Ppage'];
          include 'config.php';
        
          mysqli_query($Con,"UPDATE `datatable` SET `Product_Name`='$Product_Name',`Produt_Price`='$Product_Price',`Product_Image`='$image_destination',`Producct_Catagory`='$Product_cat' WHERE ID= $id");
          header("location:index.php");
       // }
     }
    
    ?>

</body>
</html>
