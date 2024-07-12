<?php
include('bheader.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Event Account</title>
</head>

<body>
    <h2>Delete Admin Account</h2>
    <form action="event_delete_process.php" method="post">
        <label for="admin_id">Event ID:</label>
        <input type="text" id="admin_id" name="event_id" required>
        <button type="submit">Delete</button>
        <a href="event_list.php">Back <a>
    </form>
</body>

</html>