<?php 

    // clear all session variables
session_start();

// destroy session
session_destroy();

echo "You've been logged out! See you next time.";

print_r($_SESSION);


?>