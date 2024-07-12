<?php
session_start();
include('connection.php'); // Include database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['approve'])) {
        $id = $_POST['transaction_id'];
        $name = $_SESSION['name'];
        // Update status to 'approved' in the database
        $update_query = "UPDATE transcation SET status='Approved' WHERE prod_id='" . $id . "'";
        mysqli_query($conn, $update_query);
    } elseif (isset($_POST['reject'])) {
        $id = $_POST['transaction_id'];
        // Update status to 'rejected' in the database
        $update_query = "UPDATE transcation SET status='Rejected' WHERE prod_id='" . $id . "'";
        mysqli_query($conn, $update_query);
    }
}

$sql = "SELECT * FROM transcation";
$result = mysqli_query($conn, $sql);
?>

<?php
include('bheader.php');
?>

<h1>Track Product List</h1>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['prod_id']) ?></td>
                <td><?= htmlspecialchars($row['prod_name']) ?></td>
                <td><?= htmlspecialchars($row['quantity']) ?></td>
                <td><?= htmlspecialchars($row['price']) ?></td>
                <td><?= htmlspecialchars($row['totprice']) ?></td>
                <td><?= htmlspecialchars($row['description']) ?></td>
                <td><?= htmlspecialchars($row['status']) ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="transaction_id" value="<?= $row['prod_id'] ?>">
                        <button type="submit" name="approve">Approved</button>
                        <button type="submit" name="reject">Rejected</button>
                    </form>
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