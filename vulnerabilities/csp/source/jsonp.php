<?php
header("Content-Type: application/json; charset=UTF-8");

if (array_key_exists ("callback", $_GET)) {
	$callback = $_GET['callback'];
} else {
	return "";
}

$outp = array ("answer" => "15");

$safecallback = htmlspecialchars($callback);
echo $safecallback . "(".json_encode($outp).")";
?>
