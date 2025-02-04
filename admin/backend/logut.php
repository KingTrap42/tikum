<?php
session_start(); // Start the session
session_destroy(); // Destroy all sessions
header("Location: ../index.php"); // Redirect to the home page
exit();
?>