
<?php
include(".\config.php");
$result = mysqli_query($conn, "SELECT * FROM `product`");
?>
<!-- Shopping cart section  -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Admin Panel</h5>

        <div class="row">
            <div class="col-sm-9">

                    <div class="row border-top py-3 mt-3">
                    <div class="row mx-3 ">
                  <!-- //  <h4 class="font-rubik font-size-20 ">Products</h4> -->
                   <a href=".\add-product.php" class="btn btn-primary ">Add Product </a>

                    </div>
                        <div class="col-sm-12 text-center py-2">
                        <table width='100%' border=1> 
                        <tr >
                        <th>Id</th>
                        <th>Image</th>
                         <th>Name</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Action</th>
                        </tr>

                          <?php

                          while($res = mysqli_fetch_array($result)){
                              echo "<tr>";

                              echo "<td>".$res['item_id']."</td>";
                              echo "<td > <img src=". $res['item_image']." width='100px' ></img></td>";

                              echo "<td>".$res['item_name']."</td>";

                              echo "<td>".$res['item_brand']."</td>";

                              echo "<td>".$res['item_price']."</td>";

                              echo "<td><a class='btn btn-warning font-size-12' href=\"edit-product.php?id=$res[item_id]\" >Edit</a> ";
                             
                             
                             
                              echo "<a class='btn btn-danger font-size-12'  href=\"delete.php?id=$res[item_id]\"  >Delete</a>" ."</td>";
                              echo "</tr>";

                          }
                          ?>
                          
                                        
                          </table>




                        </div>
                    </div>

            </div>


        </div>

    </div>
</section>
