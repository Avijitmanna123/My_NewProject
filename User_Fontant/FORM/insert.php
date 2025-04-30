<?php
$con=mysqli_connect("localhost","root","","newprojecct") or die (" Database canection fail");
if(isset($_POST['submit'])){
    $User_Name=$_POST['Uname'];
    $User_Email=$_POST['Uemail'];
    $User_Number=$_POST['Unumber'];
    $User_Password=$_POST['Upass'];
    $dub_email=mysqli_query($con,"SELECT * FROM `userlogin` WHERE User_Email ='$User_Email'") ;  
    $dub_Uname=mysqli_query($con,"SELECT * FROM `userlogin` WHERE User_Name ='$User_Name'") ; 
    if(mysqli_num_rows($dub_email)) {
        echo "
        <script>
          alert('This Email Id already used');
          window.location.href='Registerpage.php';
        </script>
        ";  
    }   
    if(mysqli_num_rows($dub_Uname)) {
        echo "
        <script>
          alert('This User Name Is  already used');
          window.location.href='Registerpage.php';
        </script>
        ";   
    }
    else{
        mysqli_query($con,"INSERT INTO `userlogin`( `User_Name`, `User_Email`, `User_PhoneNumber`, `User_Password`) 
                 VALUES ('$User_Name','$User_Email','$User_Number','$User_Password')");
                     echo "
                     <script>
                       alert('Register Succesfull');
                       window.location.href='login.php';
                     </script>
                     ";  
                 
    }    
}

      
?>