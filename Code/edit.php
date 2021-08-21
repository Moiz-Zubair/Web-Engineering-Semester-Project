<?php
    ob_start();
    // include header.php file
    include ('admin-header.php');

?>

<?php
 include("config.php");
 $itemid = $_GET['id'];

if(isset($_POST['Submit'])){	
    
	$brand = mysqli_real_escape_string($conn, $_POST['brand']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$image = mysqli_real_escape_string($conn, $_POST['image']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    
    $currentDateTime = date('Y-m-d H:i:s');
     echo $id;
	
		$result = mysqli_query($conn, "UPDATE  product  SET item_brand='$brand',item_name='$name',item_price='$price',item_image='$image',item_description='$description',item_register='$currentDateTime'  where item_id=$id ;");
		
		
	}
   // echo "Item added successfully";
    header("location:.\admin.php");
    
	
	$mysqli->close();


?>


<?php
// include footer.php file
include ('footer.php');
?>