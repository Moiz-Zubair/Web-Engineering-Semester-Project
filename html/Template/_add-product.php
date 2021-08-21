
<!-- Create Form -->
<div class="card border-danger">
    <div class="card-header bg-danger text-white">
        <strong><i class="fa fa-plus"></i> Add New Product</strong>
    </div>
    <div class="card-body">
        <form action="add.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="brand" class="col-form-label">Brand Name</label>
                    <input type="text" class="form-control"  name="brand" placeholder="Brand" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="price" class="col-form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="qty" class="col-form-label">Qty</label>
                    <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="image" class="col-form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                </div>
            </div>
            <div class="form-group">
                <label for="note" class="col-form-label">Description</label>
                <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
            </div>
            <button type="submit" name="Submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
        </form>
    </div>
</div>
<!-- End create form -->
<br>
