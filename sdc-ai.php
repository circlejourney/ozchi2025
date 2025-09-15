<?php
$title = "Responsible Use of AI Tools in the Design Challenge | OzCHI 2025";
$description = "Guidelines on responsible use of AI tools for participants in the OzCHI 2025 Student Design Challenge.";
$key = "sdc-ai";
$breadcrumbs = ["Call for papers" => "cfp.php", "Design Challenge: Responsible AI Use" => "$key.php"];
$content = file_get_contents("html/$key.html");
require("template.php");
?>