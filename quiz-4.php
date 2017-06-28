<?php
function write_a_file($path, $content) {
	$fp = fopen($path, "w");
	if (!$fp) {
		die('Can not open '. $path.' for write');
	}

	if (flock($fp, LOCK_EX)) {
		fwrite($fp, $content);
	} else {
		echo "Error locking file!";
	}

	fclose($fp);
}
