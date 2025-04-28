<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecom website</title>
    <link rel="stylesheet"href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body >
    <?php
    session_start();
    $count=0;
   if(isset($_SESSION['mycart']));
   //  @$count=count($_SESSION['mycart']);
    ?>
    <!--NAVE BAR-->
    <nav class="navbar bg-info  ">
    <div class="container-fluid ">
    <a class="navbar-brand text-danger fs-5 fw-3"><div style=" mix-blend-mode:color-burn; display:inline-block">
    <img src="my_shop.png" alt=" " height="50px" width="50px " ></div><b><i> MY SMARTSHOP </i></b></a><!--book my show-->
    
    <div class="d-flex"> 
     <a href="index1.php" class=" text-warning text-decoration-none pe-2"><i class="fa-solid fa-house"></i>Home | </a> 
     <a href="viewcart.php" class=" text-warning text-decoration-none pe-2"> <i class="fa-solid fa-truck"></i>  Cart(<?php echo $count ?>) | </a>
     <span class=" text-warning text-decoration-none pe-2">
     <i class="fa-solid fa-circle-user "></i>  Hello ,
     <?php
     if(isset($_SESSION['user'])){
     echo @$_SESSION['user'];
     echo "
      | <a href='FORM/logout.php' class=' text-warning text-decoration-none pe-2' ><i class='fa-solid fa-right-to-bracket'></i> Logout |</a>
     ";
     }
     else{
        echo "
      |  <a href='FORM/login.php' class= 'text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i> Login |</a>
        ";
     }
     ?>
     
     <a href="../admin/Home.php"  class=" text-warning text-decoration-none pe-2" > <i class="fa-solid fa-user-tie"></i> Admin</a>
     
     </span>
 
    </nav>
    </div>
    <div class="bg-success sticky-top">
        <ul class="list-unstyled d-flex justify-content-center">
        <li ><a href="laptop.php" class="text-decoration-none text-dark fs-4 fw-bold px-5"> LAPTOP </a></li>
        <li ><a href="bags.php" class="text-decoration-none text-dark fs-4 fw-bold px-5"> BAGS </a></li>
        <li ><a href="phone.php"  class="text-decoration-none  text-dark fs-4 fw-bold px-5"> PHONES </a></li>
        </ul>
    </div>
  
</body>
</html>