

<?php

//getting id from url
include("config.php");
 $id = $_GET['id'];


//selecting data associated with this particular id

$result = mysqli_query($conn, "SELECT * FROM product WHERE item_id=$id");



while($res = mysqli_fetch_array($result)){

    $name = $res['item_name'];

    $brand = $res['item_brand'];

    $price = $res['item_price'];

    $image = $res['item_image'];

    $description = $res['item_description'];


}

$conn->close();

?>
<!-- Create Form -->

<div class="card border-danger">
    <div class="card-header bg-danger text-white">
        <strong><i class="fa fa-pencil-square"></i> EDIT Product</strong>
    </div>
    <div class="card-body">
        <form action="edit.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="brand" class="col-form-label">Brand Name</label>
                    <input type="text" value="<?php echo $brand;?>" class="form-control"  name="brand" placeholder="Brand" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" value="<?php echo $name;?>" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="price" class="col-form-label">Price</label>
                    <input type="number" value="<?php echo $price;?>" class="form-control" id="price" name="price" placeholder="Price" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="id" class="col-form-label">Id</label>
                    <input type="text" value="<?php echo $id;?>" class="form-control" name="id" id="id" placeholder="id" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="image" class="col-form-label">Image</label>
                    <input type="text" value="<?php echo $image;?>" class="form-control" name="image" id="image" placeholder="Image URL">
                </div>
            </div>
            <div class="form-group">
                <label for="note" class="col-form-label">Description</label>
                <textarea name="description" value="<?php echo $description;?>" id="" rows="5" class="form-control" placeholder="Description"></textarea>
            </div>
            <button type="submit" name="Submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
        </form>
    </div>
</div>
<!-- End create form -->
<br>
