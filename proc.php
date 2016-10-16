<?php
	if (isset($_REQUEST['q'])){
		$output = $_REQUEST["q"];

		echo (exec("python strip.py '$output'"));
		}

?>
