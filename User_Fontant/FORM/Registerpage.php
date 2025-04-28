<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registerpage</title>
    <link rel="stylesheet"href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<body class="bg-danger">
    <div class="contanier">
     <div class="row">
       <div class="col-md-4 bg-white shadow border-info font-monospace border m-auto mt-5">
        <p class="text-center my-3 fs-6 fw-bold text-warning">USER REGISTER PAGE</p>
        <form action="insert.php" method="post">
        <div class="mb-3">
                <label>User Name :</label>
                <input type="text" name="Uname" placeholder="Enter User Name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>User Email :</label>
                <input type="text" name="Uemail" placeholder="Enter User Email" class="form-control"required>
            </div>
            <div class="mb-3">
                <label>Phone Number :</label>
                <input type="text" name="Unumber" placeholder="Enter User Mob No." class="form-control"required>
            </div>
            <div class="mb-3">
                <label>User Password :</label>
                <input type="password" name="Upass" placeholder="Enter User Password" class="form-control"required>
            </div>
            <div class="mb-3">
                <button name="submit" class=" bg-warning fs-4 text-white w-100 "  class="text-decoration-none">REGISTER</button>
            </div>
            <div class="mb-3">
                <button name="ac" class=" bg-warning fs-4 text-white w-100 "><a href="login.php"  class="text-decoration-none">ALREADY ACCOUNTC</a></button>
            </div>
        </form>
       </div>
       </div>
    </div>
    
</body>
</html>