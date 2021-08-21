<?php
include(".\config.php");
$result = mysqli_query($conn, "SELECT * FROM `orders`");
?>
<!-- Shopping cart section  -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Order Details</h5>

        <div class="row">
            <div class="col-sm-9">

                    <div class="row border-top py-3 mt-3">
                    <div class="row mx-3 ">
                  <!-- //  <h4 class="font-rubik font-size-20 ">Products</h4> -->
                   
                    </div>
                        <div class="col-sm-12 text-center py-2">
                        <table width='100%' border=1> 
                        <tr >
                        <th>Order ID</th>
                        <th>Customer Name</th>
                         <th>Customer Email</th>
                        <th>Product ID</th>
                        </tr>

                          <?php

                          while($res = mysqli_fetch_array($result)){
                              echo "<tr>";

                              echo "<td>".$res['order_id']."</td>";
                             

                              echo "<td>".$res['customer_name']."</td>";

                              echo "<td>".$res['customer_email']."</td>";

                              echo "<td>".$res['product_id']."</td>";
                              echo "</tr>";

                          }
                          ?>
                          
                                    
                          </table>




                        </div>
                    </div>

            </div>
