<?php
$title = "Student Design Challenge | OzCHI 2025";
$description = "Calling all research students! The OzCHI Student Design Challenge is open to student teams from around the world. It’s a great opportunity to test and improve your design skills and get your work exposed to the wider HCI community.";
$key = "sdc";
$breadcrumbs = ["Call for papers" => null, "Student Design Challenge" => "$key.php"];
$content = file_get_contents("html/$key.html");
require("template.php");
?>