<?php
session_start();

$id = $_POST['itemID'];
$name = $_POST['itemName'];
$price = $_POST['itemPrice'];
$quantity = $_POST['itemqty'];

if (!empty($id) && !empty($name) && !empty($price) && !empty($quantity)) {
    include('connection.php');

    $targetDirectory = "img/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true); // Create directory recursively
    }

    $targetFile = $targetDirectory . basename($_FILES["itemImage"]["name"]);
    $uploadSuccess = move_uploaded_file($_FILES["itemImage"]["tmp_name"], $targetFile);

    if ($uploadSuccess) {
        echo "The file " . basename($_FILES["itemImage"]["name"]) . " has been uploaded successfully.";

        $insert_query = "INSERT INTO product (prod_id, prod_name, quantity, price, image) VALUES (?, ?, ?, ?, ?)";
        $insert = mysqli_prepare($conn, $insert_query);

        if ($insert) {
            mysqli_stmt_bind_param($insert, "ssdis", $id, $name, $quantity, $price, $targetFile);
            $result = mysqli_stmt_execute($insert);

            if ($result) {
                echo "<script>alert('Product added successfully!')
                    window.location.href='add_shopping.php'</script>";
                exit();
            } else {
                echo "<script>alert('Failed to add product to database. Please try again later.')
                    window.location.href='add_shopping.php'</script>";
                exit();
            }
        } else {
            echo "<script>alert('Database error. Please try again later.')
                window.location.href='add_shopping.php'</script>";
            exit();
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    mysqli_stmt_close($insert);
    mysqli_close($conn);
} else {
    echo "<script>alert('Please complete all required fields.')
        window.location.href='add_shopping.php'</script>";
    exit();
}
