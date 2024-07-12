<?php
session_start();

include('connection.php');

$sql="SELECT * FROM feedback";
$result=mysqli_query($conn,$sql);
?>


<?php
include('bheader.php');
?>

<body>
<h1>Feedback List</h1>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Feedback</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['description']) ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</body>