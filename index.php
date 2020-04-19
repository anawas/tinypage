<?php
$hostname = @file_get_contents("http://instance-data/latest/meta-data/local-hostname");
$public_name = @file_get_contents("http://instance-data/latest/meta-data/public-hostname");
$instance_type = @file_get_contents("http://instance-data/latest/meta-data/instance-type");
$instance_id = @file_get_contents("http://instance-data/latest/meta-data/instance-id");

echo "Running on host:  " . $hostname . "<br />";
echo "Public dns name:  " . $public_name . "<br />";
echo "Instance of type: " . $instance_type . "<br />";
echo "Instance id:      " . $instance_id . "<br />";
?>
