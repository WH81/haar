<?php

function hite_copyright($startYear) {
	$currentYear = date('Y');
	if($startYear < $currentYear) {
		$currentYear = date('Y');
		return "&copy; $startYear &ndash; $currentYear";
	} else {
		return "&copy; $startYear";
	}
}

?>