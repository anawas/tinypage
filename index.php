<?php
$hostname = @file_get_contents("http://instance-data/latest/meta-data/local-hostname");
$instance_type = @file_get_contents("http://instance-data/latest/meta-data/instance-type");
$metrics = @file_get_contents("http://instance-data/latest/meta-data/metrics");

echo "Running on host: " . $hostname . "<br>";
echo "It is an instance of type " . $instance_type . "<br>";
echo "Important metrics: " . $metrics . "<br>"; 
?>
