<?php
$title = "Calls for Papers | OzCHI 2025";
$description = "OzCHI 2025 calls for papers, workshops, demonstrations, and more.";
$key = "cfp";
$breadcrumbs = ["Call for papers" => "$key.php"];
$content = file_get_contents("html/$key.html");
require("template.php");
?>