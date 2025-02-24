<?php
    $title = "Organising Committee | OzCHI 2025";
    $description = "Information and contact details for OzCHI 2025's organising committee members.";
    $breadcrumbs = ["Organisers" => null, "Organising Committee" => "people.php"];
    $content = file_get_contents("html/people.html");
    require("template.php");
?>