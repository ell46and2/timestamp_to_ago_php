<?php
include_once("classes/develop_php_library.php"); //Include the class library
$timeAgoObject = new convertToAgo; // Create an object for the time conversion functions
//Query database here and get timestamp
$ts = '2016-02-28 14:43:20';
//$ts = date('Y-m-d h:i:s', time()); // Current timestamp
$convertedTime = ($timeAgoObject->convert_datetime($ts)); // Convert Date Time
$when = ($timeAgoObject->makeAgo($convertedTime)); // Then convert to ago time
?>

<h2><?php echo $when; ?></h2>
