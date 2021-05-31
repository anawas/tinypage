
<?php
$opts = array(
  'http'=>array(
    'header'=>"Metadata: true\r\n"
  )
);

$context = stream_context_create($opts);
$metadata = file_get_contents("http://169.254.169.254/metadata/instance?api-version=2021-02-01", false, $context);
$m = json_decode($metadata);

$compute = $m->compute;
$region = $compute->location;
$hostname = $compute->name;
$os_type = $compute->osType;
$vm_size = $compute->vmSize;
$vm_id = $compute->vmId;
$netw = $m->network->interface[0]->ipv4->ipAddress[0];
$public_ip = $netw->publicIpAddress;

echo "<h2 style='color:blue;'>Welcome</h2><br />";
echo "<h2>";
echo "Running on host:  " . $hostname . "<br />";
echo "      in region:  " . $region . "<br />";
echo "OS type        :  " . $os_type . "<br />";
echo "VM size        :  " . $vm_size . "<br />";
echo "VM id          :  " . $vm_id . "<br />";
echo "Public IP      :  " . $public_ip . "<br />";
echo "</h2>";

?>
