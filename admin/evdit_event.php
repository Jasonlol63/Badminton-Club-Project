<?php
include('aheader.php');
?>

<!-- Main Content -->
<div class="container-fluid content">
    <h1>Edit Event </h1>
    <form action="evdit-event-process.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" /> <!-- Max file size: 1MB -->
        <div class="form-group">
            <label for="eventName">Event ID:*</label>
            <input type="text" class="form-control" name="eventID" required>
            <label for="eventName">Event Name:</label>
            <input type="text" class="form-control" name="eventName">
        </div>
        <div class="form-group">
            <label for="eventPrice">Event Date:</label>
            <input type="date" class="form-control" name="eventdate">
            <label for="eventPrice">Event Time:</label>
            <input type="time" class="form-control" name="eventtime">
            <label for="eventPrice">Event Time End:</label>
            <input type="time" class="form-control" name="event_time_end">
        </div>
        <div class="form-group">
            <label for="eventPrice">Event Price:</label>
            <input type="text" class="form-control" name="eventPrice">
            <label for="eventlocation">Event Location:</label>
            <input type="text" class="form-control" name="eventlocation">
            <label for="eventDescription">Event Description:</label>
            <textarea class="form-control" name="eventDescription" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="eventImage">Upload Image:</label>
            <input type="file" class="form-control-file" name="eventImage">
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>