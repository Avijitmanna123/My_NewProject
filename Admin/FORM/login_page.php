 <?php

 $Con=mysqli_connect("localhost","root","","newprojecct") or die ("CONECTION FAILED");
  $U_Name=$_POST['uname'];
  $U_Pass=$_POST['upass'];
  $result=mysqli_query($Con ,"SELECT * FROM `login_table` WHERE User_Name='$U_Name' AND Password='$U_Pass' ");
  session_start();
  if(mysqli_num_rows($result)){
    $_SESSION['hr'] = $U_Name;

    echo "
     <script> 
     alert('LOGIN SUCCESFULL');
     window.location.href='../Home.php';
     
     </script>
    ";
  }
  else{
    echo "
     <script> 
     alert('LOGIN  ERROR ...PLEAS TRY AGEN...!');
     window.location.href='../form/login.php';
     
     </script>
    ";
  }
?>