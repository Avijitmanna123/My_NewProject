<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet"href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <?php
     session_start();
     if(!$_SESSION['hr']){
      header("location:form/login.php");
     }
     ?>
<body style="background-color: greenyellow;">
     <!--NAV BAR-->
<nav class="navbar navbar-light  bg-dark">
  <div class="container-fluid text-white">
 <a class="navbar-brand  text-white fw-bold px-5 " >  <i class="fa-solid fa-truck text-white px-2 "></i>MYSHOP</a>
    <span">
    <i class="fa-solid fa-user-tie text-white"> </i>
    HELLO , <?php echo  $_SESSION['hr']; ?>| 
    
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="form/logout.php" class=" text-decoration-none text-white fs-8 fw-bold"> LOGOUT</a> | 
    <a href="../User_fontant/index1.php" class=" text-decoration-none text-white fw-bold">USERPENALE</a>
    </span>
  </div>
</nav> 
    <!--NAV BAR END-->
    <div class=" text-center  text-danger">
     <h1> DASHBOARD</h1>
    </div>
    <div class=" text-center col-md-5 m-auto py-2" style="background-color: blueviolet;">
      <a href="product/index.php" class ="text-decoration-none text-white px-5 fw-bold">ADD POST</a>
      <a href="user.php" class ="text-decoration-none text-white px-5 fw-bold">USER</a>
    </div>
     
   
</body>
</html>