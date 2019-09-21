<?php
include 'config.php';
if (empty ($droplets[1]->id)){
$created = $droplet->create('Python', 'fra1', 's-1vcpu-1gb', $imgid);
    if (!empty($created)){
        echo "Server being created";
    }
    else {
        echo "error";
    }
} else {
    echo "Server already running. Destroy it first";
}
?>