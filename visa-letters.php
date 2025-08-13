<?php
    $title = "Visa Support Letters | OzCHI 2025";
    $description = "Accepted as an author? Read this page to find out how to request a visa support letter to attend OzCHI 2025.";
    $breadcrumbs = ["Call for papers" => "visa-letters.php", "Demonstrations" => "visa-letters.php"];
    $content = file_get_contents("html/visa.html");
    require("template.php");
?>