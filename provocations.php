<?php
$title = "Provocations Talks | OzCHI 2025";
$description = "We invite you to submit a proposal to present a provocations talk at OzCHI 2025. Proposals are due by 4 August";
$breadcrumbs = ["Call for papers" => null, "Provocations" => "provocations.php"];
$content = file_get_contents("html/provocations.html");
include("template.php");
?>