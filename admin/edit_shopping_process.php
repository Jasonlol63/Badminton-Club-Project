<?php
session_start();

include('connection.php');

$prodid = $_POST['item_id'];
$prodname = $_POST['item_name'];
$prodprice = $_POST['item_price'];
$prodqty = $_POST['item_qty'];

$updates = [];

if (!empty($prodid) || !empty($prodname) || !empty($prodprice) || !empty($prodqty)) {

    // Prepare the UPDATE query
    $update_query = "UPDATE product SET ";

    if (!empty($prodname)) {
        $updates[] = "prod_name='$prodname'";
    }

    if (!empty($prodprice)) {
        $updates[] = "price='$prodprice'";
    }

    if (!empty($prodqty)) {
        $updates[] = "quantity='$prodqty'";
    }

    // Construct the SET part of the query
    $update_query .= implode(", ", $updates);

    // Add WHERE condition
    $update_query .= " WHERE prod_id='" . $prodid . "'";

    // Execute the UPDATE query
    $result = mysqli_query($conn, $update_query);

    if ($result) {
        echo "<script>alert('Product updated successfully!')
        window.location.href='eshopping_list.php'</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update Product!')
        window.location.href='edit_shopping.php'</script>";
        exit();
    }
}
