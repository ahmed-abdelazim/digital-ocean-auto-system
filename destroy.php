<?php
include "config.php";
if (!empty ($droplets[1]->id)){
$id = $droplets[1]->id;
$destroyed = $droplet->delete($id);
echo "Destroy signal sent";
} else {
    echo "No server to destroy";
}
?>