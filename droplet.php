<?php
include "config.php";
if (empty($droplets[1]->id)){
    echo "No server is running";
    echo "<br>";
    echo "<br>";

}
else {
echo "Server ID: ".$droplets[1]->id;
echo "<br>";
echo "Server Name: ".$droplets[1]->name;
echo "<br>";
echo "Server Memory: ".$droplets[1]->memory;
echo "<br>";
echo "Server Ip: ".$droplets[1]->networks[0]->ipAddress;
echo "<br>";
echo "<br>";
}
?>