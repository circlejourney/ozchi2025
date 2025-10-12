<?php
    $title = "Accepted Papers | OzCHI 2025";
    $description = "A list of long papers and late-breaking work accepted for publication at OzCHI 2025.";
    $breadcrumbs = ["Program" => null, "Accepted Papers" => "accepted-papers.php"];
    $content = file_get_contents("html/accepted-papers.html");
    require("template.php");
?>