<?php
    $title = "Workshop Schedule | OzCHI 2025";
    $description = "Schedules, dates, and bios for the workshops at OzCHI 2025.";
    $breadcrumbs = ["Program" => null, "Workshop Schedule" => "workshop-schedule.php"];
    $content = file_get_contents("html/workshop-schedule.html");
    require("template.php");
?>