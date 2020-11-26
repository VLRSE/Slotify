<?php

//start a session
session_start();

//remove all session variables 
session_unset();
//destroy session for user to log out
session_destroy();


//redirect user back to the premium page

header("location: ..premium.php");
