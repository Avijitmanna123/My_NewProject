<?php
 $Username=$_POST['Uname'];
 $userpassword=$_POST['Upass'];
 $con=mysqli_connect("localhost","root","","newprojecct") or die ("connection Failed");
 $qury=mysqli_query($con,"SELECT * FROM `userlogin` WHERE (User_Name='$Username' OR User_Email='$Username')AND User_Password='$userpassword'");
 session_start();
 if(mysqli_num_rows($qury))
    {
     $_SESSION['user']=$Username;
      echo"
        <script>
        alert('LOGIN SUCCESFULL');
        window.location.href='../index1.php';
        </script>
        ";  
    }
 else
    {
     echo"
        <script>
        alert('wrong user name and password');
        window.location.href='login.php';
        </script>
        ";  
    }
 
 ?>