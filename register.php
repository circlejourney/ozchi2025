<?php
    $title = "Register to Attend | OzCHI 2025";
    $description = "Registrations for OzCHI 2025 are now open!";
    $breadcrumbs = ["Attend" => null, "Register" => "register.php"];
    $content = file_get_contents("html/register.html");
    require("template.php");
?>