<?php
$hostname = @file_get_contents("http://instance-data/latest/meta-data/local-hostname");
$public_name = @file_get_contents("http://instance-data/latest/meta-data/public-hostname");
$instance_type = @file_get_contents("http://instance-data/latest/meta-data/instance-type");
$instance_id = @file_get_contents("http://instance-data/latest/meta-data/instance-id");

echo "<h1 style='color:green;'>Welcome</h1><br />";
echo "<div style='font-size: 130%;'>Running on host: " . $hostname . "</div><br />";
echo "<div style='font-size: 130%;'>Public dns name: " . $public_name . "</div><br />";
echo "Instance of type: " . $instance_type . "<br />";
echo "Instance id:      " . $instance_id . "<br />";
?>
