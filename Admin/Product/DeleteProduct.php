<?php
  $id=$_GET['PID'];
  include 'Config.php';
  mysqli_query($Con,"DELETE FROM `datatable` WHERE ID=$id");
  header("location:index.php");
?>