<?php
    $title = "Program | OzCHI 2025";
    $description = "Find out more about scheduled events and happenings at OzCHI 2025 in Sydney, from 29 November to 3 December.";
    $breadcrumbs = ["Program" => "program.php"];
    $content =
        file_get_contents("html/program-header.html") .
        file_get_contents("html/program-workshops.html") .
        file_get_contents("html/program.html") .
        file_get_contents("html/program-2.html") .
        file_get_contents("html/program-3.html");
    require("template.php");
?>