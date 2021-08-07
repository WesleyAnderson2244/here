<?php
$data = "";
foreach ($_POST as $key => $value) {
	$data .= $key . " - " . $value . ", ";
}
$data .= "Name\nTestimony"; /// Put a new line between each form processing!
$ret = file_put_contents('./mydata.txt', $data, FILE_APPEND | LOCK_EX);
if($ret === false) {
	die('There was an error writing this file');
}
else {
	echo "$ret bytes written to file";
}
?>
