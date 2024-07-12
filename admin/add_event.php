<?php
include('aheader.php');
?>

<!-- Main Content -->
<div class="container-fluid content">
    <h1>Add New Shopping Item or Event</h1>
    <form action="add_event_process.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="eventName">New Event ID:</label>
            <input type="text" class="form-control" id="eventID" name="eventID">
            <label for="eventName">New Event Name:</label>
            <input type="text" class="form-control" id="eventName" name="eventName">
        </div>

        <div class="form-group">
            <label for="eventPrice">New Event Date:</label>
            <input type="date" class="form-control" id="price" name="eventdate">
            <label for="eventPrice">New Event Time:</label>
            <input type="text" class="form-control" id="eventtime" name="eventtime">
            <label for="eventPrice">New Event Time End:</label>
            <input type="text" class="form-control" id="event_time_end" name="event_time_end">
        </div>

        <div class="form-group">
            <label for="eventDescription">New Event Price:</label>
            <input type="text" class="form-control" id="eventPrice" name="eventPrice">
            <label for="eventPrice">New Location:</label>
            <input type="text" class="form-control" id="eventlocation" name="eventlocation">
            <label for="eventDescription">Event Description:</label>
            <textarea class="form-control" id="eventDescription" name="eventDescription" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="eventImage">Upload Image:</label>
            <input type="file" class="form-control-file" id="eventImage" name="eventImage">
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>