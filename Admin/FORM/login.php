<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet"href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class=" bg-secondary">
<div class="conctainer">
   <div class="row">
 <div class=" col-md-4 m-auto bg-white   shadow border border-primary mt-5 " >
       <form action="login_page.php" method="post" >
      <h3 class="text-center text-warning"><u><i>LOGIN : </i></u></h3> <br>
      <div class="mb-3">
       <label class="form-label"> User Name :</label>
       <input type="text"  name="uname" class="form-control " placeholder="Enter Your User  Name " required>
      </div>
      <div class="mb-3">
       <label class="form-label"> Password :</label>
       <input type="password" name="upass" class="form-control " placeholder="Enter Your password " required>
      </div>
      <div class="mb-3">
        <button  name="Submit" class="submit bg-danger text-white form-control my-3">Login</button>
      </div>
      </form>
 </div>
 </div>
 </div>
</body>
</html>