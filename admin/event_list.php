<?php
session_start();
include('connection.php');

$sql = "SELECT * FROM event";
$result = mysqli_query($conn, $sql);
?>

<?php
include('bheader.php');
?>

<h1>Event List</h1>
<table>
    <thead>
        <tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Event Time</th>
            <th>Event Period Ended</th>
            <th>Event Location</th>
            <th>Event Ticket Prices</th>
            <th>Description</th>
            <th>Event Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= htmlspecialchars($row['event_id']) ?></td>
                <td><?= htmlspecialchars($row['eventname']) ?></td>
                <td><?= htmlspecialchars($row['date']) ?></td>
                <td><?= htmlspecialchars($row['time']) ?></td>
                <td><?= htmlspecialchars($row['time_end']) ?></td>
                <td><?= htmlspecialchars($row['location']) ?></td>
                <td><?= htmlspecialchars($row['price']) ?></td>
                <td><?= htmlspecialchars($row['context']) ?></td>
                <td><?= htmlspecialchars($row['image']) ?></td>
                <td>
                    <a href="evdit_event.php?event_id=<?= $row['event_id'] ?>">Edit</a> |
                    <a href="event_delete.php?event_id=<?= $row['event_id'] ?>" onclick="return confirmDelete()">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this event?");
    }
</script>

</body>

</html>

<?php
mysqli_close($conn);
?>