<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>
<body style="background-color:gray;">
    <?php
      include 'header.php'
    
    ?>
     <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center  rounder">
                <h1 class=" text-warning my-3"> My Cart</h1>
            </div>
        </div>
     </div>
    
         <div class="container-fluid my-3   " >
         <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class=" table table-bordered text-center">
                    <thead>
                        <th class="text-white bg-danger">SERIAL NO.</th>
                        <th class="text-white bg-danger">PRODUCT NAME</th>
                        <th class="text-white bg-danger">PRODUCT PRICE</th>
                        <th class="text-white bg-danger"> PRODUCT QUNTITY</th>
                        <th class="text-white bg-danger">TOTAL PRICE</th>
                        <th class="text-white bg-danger">UPDATE</th>
                        <th class="text-white bg-danger">DELETE</th>
                    </thead>
                    <tbody>

                    <?php
                       
                        $Total=0;
                        $allTotal=0;
                        $i=0;
                        if(isset($_SESSION['mycart'])){
                            foreach($_SESSION['mycart'] as $key => $value){
                                 $Total= $value['productprice']*$value['productquntity'];
                                 $allTotal += $value['productprice']*$value['productquntity'];$Total= $value['productprice']*$value['productquntity'];
                                 $i=$key+1;
                                echo"
                                <form  action='insertcart.php' method='POST'>
                                <tr>
                                <td> $i </td>
                                <td><input type='hidden' name='PNAME' value='$value[productname]'>$value[productname]</td>
                                <td><input type='hidden' name='Pprice' value='$value[productprice]'>$value[productprice]</td>
                                <td><input type='' name='quntity' value='$value[productquntity]'></td>
                                <td> $Total</td>
                                <td><button class='bg-danger' name='updatebtn'> UPDATE</button'> </td>
                                <td><button class='bg-warning' name='deletebtn'>Delete</button</td>
                                <input type='hidden' name='item' value='$value[productname]'>
                             
                                </tr>
                                </form>
                                ";
                            }
                        }
                      
                     
                    ?>

                    </tbody>
                </table>
                </div>
                <div class="col-lg-2 text-center">
                    <h2>TOTAL</h2>
                    <h3 class=" bg-danger text-white"><?php echo  number_format($allTotal,2) ?></h3>
                </div>
            </div>
         </div>
</body>
</html>