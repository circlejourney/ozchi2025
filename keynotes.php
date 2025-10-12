<?php
    $title = "Keynote Speakers | OzCHI 2025";
    $description = "Keynote speaker bios for OzCHI 2025. Keynotes will be presented by Duncan Brumby and Elizabeth Churchill.";
    $breadcrumbs = ["Program" => null, "Keynote Speakers" => "keynotes.php"];
    $content = file_get_contents("html/keynotes.html");
    require("template.php");
?>