<?php
session_start();
include('connection.php'); // Include database connection script

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);
?>

<?php
include('bheader.php'); 
?>

    <h1>Change Password</h1>
    <table>
        <thead>
            <tr>
                <th>Admin Name</th>
                <th>Admin Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['AdminID']) ?></td>
                    <td><?= htmlspecialchars($row['password']) ?></td>
                    <td>
                        <?php echo '<a href="admin_edit.php">Edit</a> | <a href="admin_delete.php">Delete</a>'; ?>
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