<?php

 $Con=mysqli_connect("localhost","root","","newprojecct") or die ("CONECTION FAILED");
 $id=$_GET['ID'];
  mysqli_query($Con,"DELETE FROM `userlogin` WHERE ID=$id");
  $id=array_values($id);
  header("location:user.php");
?>