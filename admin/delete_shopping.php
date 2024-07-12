<?php
include('bheader.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Shopping</title>
</head>
<body>
    <h2>Delete Shopping Item</h2>
    <form action="delete_shopping_process.php" method="post">
        <label for="admin_id">Product ID:</label>
        <input type="text" id="prod_id" name="prod_id" required>
        <button type="submit">Delete</button>
        <a href="eshopping_list.php">Back <a>
    </form>
</body>
</html>