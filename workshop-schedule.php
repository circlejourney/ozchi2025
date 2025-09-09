<?php
    $title = "Workshop Schedule | OzCHI 2025";
    $description = "The schedule for OzCHI 2025 workshops, including dates and durations.";
    $breadcrumbs = ["Program" => null, "Workshop Schedule" => "workshop-schedule.php"];
    $content = file_get_contents("html/workshop-schedule.html");
    require("template.php");
?>