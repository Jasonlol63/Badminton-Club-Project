<?php
include('aheader.php');
?>

<!-- Main Content -->
<div class="container-fluid content">
    <h1>Add New Shopping Item or Event</h1>
    <form action="add_shopping_process.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" /> <!-- Max file size: 1MB -->
        <div class="form-group">
            <label for="itemName">New Product ID:</label>
            <input type="text" class="form-control" id="prodID" name="itemID">
            <label for="itemName">New Product Name:</label>
            <input type="text" class="form-control" id="itemName" name="itemName">
        </div>
        <div class="form-group">
            <label for="itemPrice">New Product Price:</label>
            <input type="text" class="form-control" id="itemPrice" name="itemPrice">
            <label for="itemqty">New Product Quantity:</label>
            <input type="number" class="form-control" id="itemqty" name="itemqty">
        </div>

        <div class="form-group">
            <label for="itemImage">Upload New Image:</label>
            <input type="file" class="form-control-file" id="itemImage" name="itemImage">
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
</div>

</html>