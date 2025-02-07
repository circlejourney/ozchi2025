<?php
header("Content-Type: text/plain");
$data = json_decode(file_get_contents("committee.json"), 1);
$template = file_get_contents("template.txt");
foreach($data as $row) {
	$working = $template;
	foreach(array_keys($row) as $key) {
		$working = str_replace("{".strtoupper($key)."}", $row[$key], $working);
	}
	$files = scandir("static/images/people");
	$img = array_filter($files, function($file) use($row) {
		return strpos($file, $row["Name"]) !== false;
	});
	if(isset(array_values($img)[0])) $working = str_replace("{IMAGE}", "static/images/people/".urlencode(array_values($img)[0]), $working);
	else $working = str_replace("{IMAGE}", "", $working);
	echo $working."\n\n";
}