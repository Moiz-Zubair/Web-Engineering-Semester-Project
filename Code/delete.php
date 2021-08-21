<?php

include("config.php");
 $item_id = $_GET['id'];

 $query = "DELETE from product where item_id='$item_id'";
 $data=mysqli_query($conn,$query);



 header("location:.\admin.php");	
 $mysqli->close();


?>