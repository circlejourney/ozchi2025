<?php
    $title = "Demonstrations | OzCHI 2025";
    $description = "Submit demonstration proposals to OzCHI 2025.";
    $breadcrumbs = ["Call for papers" => null, "Demonstrations" => "demos.php"];
    $content = file_get_contents("html/demos.html");
    require("template.php");
?>