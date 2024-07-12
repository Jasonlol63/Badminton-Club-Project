<?php include('bheader.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Admin Account</title>
</head>

<body>
    <h2>Delete Admin Account</h2>
    <form action="admin_delete_process.php" method="post">
        <label for="admin_id">Admin ID:</label>
        <input type="text" id="admin_id" name="admin_id" required>
        <button type="submit">Delete</button>
        <a href="admin_profile.php">Back</a>
    </form>
</body>

</html>