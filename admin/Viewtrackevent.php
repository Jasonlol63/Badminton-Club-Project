<?php
session_start();
include('connection.php'); // Include database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['approve'])) {
        $id = $_POST['event_id'];
        // Update status to 'approved' in the database
        $update_query = "UPDATE `order` SET status='Approved' WHERE event_id='$id'";
        mysqli_query($conn, $update_query);
    } elseif (isset($_POST['reject'])) {
        $id = $_POST['event_id'];
        // Update status to 'rejected' in the database
        $update_query = "UPDATE `order` SET status='Rejected' WHERE event_id='$id'";
        mysqli_query($conn, $update_query);
    }
}

$sql = "SELECT * FROM `order`";
$result = mysqli_query($conn, $sql);
?>

<?php
include('bheader.php');
?>

<h1>Track Event List</h1>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['event_id']) ?></td>
                <td><?= htmlspecialchars($row['eventname']) ?></td>
                <td><?= htmlspecialchars($row['quantity']) ?></td>
                <td><?= htmlspecialchars($row['price']) ?></td>
                <td><?= htmlspecialchars($row['totalprice']) ?></td>
                <td><?= htmlspecialchars($row['status']) ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="event_id" value="<?= $row['event_id'] ?>">
                        <button type="submit" name="approve">Approved</button>
                        <button type="submit" name="reject">Rejected</button>
                    </form>
                </td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<br></br>

<div>
    <form method="post" action="Viewtrackevent_edit.php">
        <div>
            <label for="name">Event ID</label>
            <input type="text" name="id">
        </div>

        <div>
            <label for="name">Ticket Quantity</label>
            <input type="text" name="ticket">
        </div>

        <div>
            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
        </div>

    </form>
</div>

</body>

</html>

<?php
// Close database connection
mysqli_close($conn);
?>