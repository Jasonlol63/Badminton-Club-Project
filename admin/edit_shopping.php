<?php
include('aheader.php');
?>
<!-- Main Content -->
<div class="container-fluid content">
    <h1>Edit Product Item</h1>
    <form action="edit_shopping_process.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" /> <!-- Max file size: 1MB -->
        <div class="form-group">
            <label for="itemName">Product ID:*</label>
            <input type="text" class="form-control" name="item_id" required>
            <label for="itemName">Product Name:</label>
            <input type="text" class="form-control" name="item_name">
        </div>
        <div class="form-group">
            <label for="itemPrice">Quantity:</label>
            <input type="number" class="form-control" name="item_qty">
            <label for="itemPrice">Product Price:</label>
            <input type="text" class="form-control" name="item_price">
        </div>
        <div class="form-group">
            <label for="itemImage">Upload Image:</label>
            <input type="file" class="form-control-file" name="item_image">
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>