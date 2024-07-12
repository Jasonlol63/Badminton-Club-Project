<?php
# start function
session_start();

# remove session
session_unset();

# stop function
session_destroy();

echo"<script>window.location.href='index.php';</script>";
?>