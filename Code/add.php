<?php
    ob_start();
    // include header.php file
    include ('admin-header.php');

?>



<?php
 include("config.php");


if(isset($_POST['Submit'])){	
	$brand = mysqli_real_escape_string($conn, $_POST['brand']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$image = mysqli_real_escape_string($conn, $_POST['image']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $currentDateTime = date('Y-m-d H:i:s');


	
		$result = mysqli_query($conn, "INSERT INTO product(item_brand,item_name,item_price,item_image,item_description,item_register) VALUES('$brand','$name','$price','$image','$description','$currentDateTime') ");
		
		//display success message
      
	//
	}
    echo "Item added successfully";
    header("location:.\admin.php");
    
	
	$mysqli->close();


?>


<?php
// include footer.php file
include ('footer.php');
?>