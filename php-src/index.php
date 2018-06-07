<?php
/**
 *  Create TumblrClient instance
 *
 *  Author: Debika Dutt debikadutt@gmail.com
 *  Date:   4/7/2018
 */
//session_start();

require "TumblrClient.php";

$client = new TumblrClient();

$success = $client->create_json_file();

if ($success) {
	echo 'success';
} else {
	echo 'failed';
}
?>
