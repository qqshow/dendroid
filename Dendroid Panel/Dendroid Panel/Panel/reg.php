<?php
$allowedDomains = array("http://127.0.0.1/", "127.0.0.1");

if (in_array($_SERVER['HTTP_HOST'], $allowedDomains)) {
	$validDomain = "true";
} else {
	$validDomain = "false";
}
?>