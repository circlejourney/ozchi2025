<?php
    $title = "Papers and Late-Breaking Work | OzCHI 2025";
    $description = "Submit papers and late-breaking work to OzCHI 2025. Long papers are due by 2 June and Late-Breaking Work by 4 August.";
    $breadcrumbs = ["Call for papers" => null, "Papers and Late-Breaking Work" => "papers-lbw.php"];
    $content = file_get_contents("html/papers-lbw.html");
    include("template.php");
?>