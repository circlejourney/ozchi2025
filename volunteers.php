<?php
    $title = "Student Volunteers | OzCHI 2025";
    $description = "Find out how to volunteer for this OzCHI 2025 here! Learn more about the responsibilities, benefits, and important dates.";
    $breadcrumbs = ["Organisers" => null, "Student Volunteers" => "volunteers.php"];
    $content = file_get_contents("html/volunteers.html");
    require("template.php");
?>