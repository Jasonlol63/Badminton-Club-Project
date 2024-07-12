<?php
include('bheader.php');

include('connection.php');

if (isset($_POST['id'], $_POST['ticket'])) {
    include('connection.php');
    $sql = "UPDATE order SET quantity=? WHERE event_id=?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'si', $_POST['ticket'], $_POST['id']);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Update successful <a href='event_list.php'>Back</a>";
    } else {
        echo "Update failed <a href='event_list.php'>Back</a>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

