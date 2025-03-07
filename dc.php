<?php
    $title = "Doctoral Consortium | OzCHI 2025";
    $description = "Apply to attend the Doctoral Consortium at OzCHI 2025!";
    $breadcrumbs = ["Call for papers" => null, "Doctoral Consortium" => "dc.php"];
    $content = file_get_contents("html/dc.html");
    require("template.php");
?>