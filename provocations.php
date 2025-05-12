<?php
$title = "Provocations Talks | OzCHI 2025";
$description = "We invite you to submit a proposal to present a provocations talk at OzCHI 2025.";
$breadcrumbs = ["Call for papers" => "cfp.php", "Provocations" => "provocations.php"];
$content = file_get_contents("html/provocations.html");
require("template.php");
?>