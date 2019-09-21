<?php
include "config.php";
$url="http://".$droplets[1]->networks[0]->ipAddress."/rerun.php";
print_r(file_get_contents($url));
?>