<?php
session_start();
include('connection.php');

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
?>

<?php
include('bheader.php'); 
?>


    <h1>Product List</h1>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Product Prices</th>
                <th>Product Image</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['prod_id']) ?></td>
                    <td><?= htmlspecialchars($row['prod_name']) ?></td>
                    <td><?= htmlspecialchars($row['quantity']) ?></td>
                    <td><?= htmlspecialchars($row['price']) ?></td>
                    <td><?= htmlspecialchars($row['image']) ?></td>
                    <td>
                        <?php echo '<a href="edit_shopping.php">Edit</a> | <a href="delete_shopping.php">Delete</a>'; ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>

</html>

<?php
// Close database connection
mysqli_close($conn);
?>