<?php
    $title = "Social Events | OzCHI 2025";
    $description = "Come join us for food, great views, and networking opportunities! Information about the social events taking place during OzCHI 2025 can be found here.";
    $breadcrumbs = ["Attend" => null, "Social Events" => "social-events.php"];
    $content = file_get_contents("html/social-events.html");
    require("template.php");
?>