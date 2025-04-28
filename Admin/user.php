<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uder data</title>
    <link rel="stylesheet"href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body style="background-color:blueviolet">
    <?php
    $con=mysqli_connect("localhost","root","","newprojecct") or  die("ONNECCTION FAILD");
    $qury=mysqli_query($con,"SELECT * FROM `datatable`");


    ?>
    <table class="table table-secondary table-bordered ">
        <thead class=" text-center ">
            <th>SERIAL NO.</th>
            <th>USER NAME</th>
            <th> USER EMAIL</th>
            <th> USER PHONE NUMBER</th>
            <th> DELET</th>
        </thead>
        <tbody class="text-center text-danger">
            <?php 

                while($row=mysqli_fetch_array($qury)){
                    
                echo"
                   <td>$row[ID]</td>
                   <td>$row[User_Name]</td>
                   <td>$row[User_Email]</td>
                   <td>$row[User_PhoneNumber]</td>
                   <td>delete</td>
                ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>