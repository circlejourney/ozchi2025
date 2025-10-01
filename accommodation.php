<?php
    $title = "Accommodation | OzCHI 2025";
    $description = "Browse and book accommodation options for the OzCHI 2025 conference here.";
    $breadcrumbs = ["Attend" => null, "Accommodation" => "accommodation.php"];
    $content = file_get_contents("html/accommodation.html");
    require("template.php");
?>