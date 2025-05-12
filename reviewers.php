<?php
$title = "Reviewer's Guidelines | OzCHI 2025";
$description = "Guidelines for reviewing OzCHI 2025 submissions.";
$key = "reviewers";
$breadcrumbs = ["Call for papers" => "cfp.php", "Reviewers" => "$key.php"];
$content = file_get_contents("html/$key.html");
require("template.php");
?>