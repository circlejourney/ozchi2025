<?php
    $title = "Workshops | OzCHI 2025";
    $description = "Submit a proposal to present a workshop at OzCHI 2025 now!";
    $breadcrumbs = ["Call for papers" => null, "Workshops" => "workshops.php"];
    $content = file_get_contents("html/workshops.html");
    require("template.php");
?>