<?php
session_start();
include('connection.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<?php
include('bheader.php');
?>

<h1>User List</h1>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Country</th>
            <th>State</th>
            <th>Region</th>
            <th>Postcode</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['phoneNo']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['gender']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
                <td><?= htmlspecialchars($row['country']) ?></td>
                <td><?= htmlspecialchars($row['state']) ?></td>
                <td><?= htmlspecialchars($row['region']) ?></td>
                <td><?= htmlspecialchars($row['postcode']) ?></td>
                <td>
                    <a href="userAccedit.php?name=<?= $row['name'] ?>" class="editButton">Edit</a>
                    <a>|</a>
                    <a href="userAccdelete.php?name=<?= $row['name'] ?>" onclick="confirmation(event)" class="deleteForm">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
    function confirmation(event) {
        event.preventDefault();
        var x = confirm("Are you sure you want to delete this user?");
        if (x) {
            window.location.href = event.target.href;
        }
    }
</script>

</body>

</html>

<?php
mysqli_close($conn);
?>